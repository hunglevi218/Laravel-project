<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
#mnleft{
	margin-top: 100px;
}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
		
		</div>
		<div class="row mt-5">
			<div class="col-md-3" id="mnleft">
				<div class="row">
					<a href="/" class="col-md-12 m-auto btn btn-info">Home</a>
				</div>
			</div>
			<div class="col-md-9">
			
				<div class="row">
					<h2 class="text-center col-md-12">Products List</h2>
				</div>
				<div class="row mt-8 justify-content-md-end">
					<a href="{{ route('create') }}" class="col-md-2 btn btn-success">Add product</a>
				</div>
				<div class="row">
					<table class="table">
					  <thead>
					    <tr>
					      	<th scope="col">id</th>
					      	<th scope="col">name</th>
							<th scope="col">img</th>
					      	<th scope="col">oldprice</th>
					      	<th scope="col">saleprice</th>
					      	<th scope="col">handle</th>
					    </tr>
					   
					  </thead>
					  <tbody>
						@foreach($products as $row)
					  <tr>
					      	<th scope="col">{{$row->id}}</th>
					      	<th scope="col">{{$row->name}}</th>
							<th scope="col" ><img width="50" height="50" src="{{$row->img}}"></th>
					      	<th scope="col">{{$row->oldprice}}</th>
					      	<th scope="col">{{$row->saleprice}}</th>
					      	<th scope="col"> 
								<a href="/admin/edit/{{$row->id}}" class="btn btn-success">Edit</a>
					      	 	<a href="/admin/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
							</th>
					    </tr>
						@endforeach
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>