<?php
    class database{
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $database = "shoe";
        protected $conn = null;
        
        //construct là hàm khởi tạo, nó sẽ chạy luôn code trong đó mà ko cần gọi 
        public function __construct(){
            $this->connect();
        }

        public function connect(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            if(!$this->conn){
                echo 'ket noi that bai';
                exit();
            }
        }

        public function get($table, $condition=array()){
            $sql = "SELECT * FROM $table";
            if(!empty($condition)){
                $sql .= " WHERE ";
                foreach($condition as $key => $value){
                    $sql .= "$key = '$value'";
                }
            }
            $query = mysqli_query($this->conn, $sql);
            $result = array();
            if($query){
                while($row = mysqli_fetch_assoc($query)){
                    $result[] = $row;
                }
            }
            return $result;
        }
        
        public function search($table, $column, $value){
            $sql = "SELECT * FROM $table WHERE $column LIKE '%$value%' ";
            $query = mysqli_query($this->conn, $sql);
            $result = array();
            if($query){
                while($row = mysqli_fetch_assoc($query)){
                    $result[] = $row;
                }
            }
            return $result;
        }
        public function insert($table,$data=array())
		{
			//Bước 1:Lấy giá trị của key cho vòa 1 mảng
			$keys = array_keys($data);
			//Bước 2: xử lí chuỗi với mảng ở trên
			$fields =  implode(",", $keys);

			//Bước 3: xử lí giá trị value
			$value_str ='';
			foreach ($data as $key => $value) {
				$value_str .="'$value',"; 
			}
			//Bước 4: xóa dấu phẩy ở cuối đi
			$value_str = trim($value_str, ",");
			//Bước 5: Lên cấu trúc câu lệnh sql
            $sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			//Bước 6: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 7: Trả về giá trị boolean true/false
			return $query;
		}

        public function check($column,$string){
            $row = mysqli_query($this->conn,"SELECT * FROM user WHERE $column = '$string'");
            if(mysqli_num_rows($row) == 0){
                return true;
            }else{
                return false;
            }
        }
        public function checkUser($column1, $column2, $string1, $string2){
            $row = mysqli_query($this->conn,"SELECT * FROM user WHERE $column1 = '$string1' AND $column2 = '$string2'");
            if(mysqli_num_rows($row) > 0){
                return true;
            }else{
                return false;
            }
        }
    }
?>