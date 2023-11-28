<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Comments;

class ShopController extends Controller
{
    public function index(){
        $products = DB::table('products')->select('*');
        $products = $products->get();
        $jordanCount  = DB::table('products')
        ->where('type', '=', 'Jordan')
        ->count();
        $airmaxCount  = DB::table('products')
        ->where('type', '=', 'Air max')
        ->count();
        $airforceCount  = DB::table('products')
        ->where('type', '=', 'Air force')
        ->count();
        $black  = DB::table('products')
        ->where('color', '=', 'black')
        ->count();
        $red  = DB::table('products')
        ->where('color', '=', 'red')
        ->count();
        $green  = DB::table('products')
        ->where('color', '=', 'green')
        ->count();
        $pink  = DB::table('products')
        ->where('color', '=', 'pink')
        ->count();
        $white  = DB::table('products')
        ->where('color', '=', 'white')
        ->count();
        return view('shop', compact('products','jordanCount','airmaxCount','airforceCount','black','red','green', 'pink', 'white'));
    }
    public function show($id)
    {   
        $comment = Comments::all();
        $products = Products::where('id','=',$id)->select('*')->first();
        return view('detail', compact('products','comment'));
    }
    public function search(Request $request){
        $search = $request->input('keyword');
        $products = Products::query()
        ->where('name', 'LIKE', "%{$search}")
        ->orWhere('description','LIKE', "%{$search}%")       
        ->orWhere('type','LIKE', "%{$search}%")       
        ->orWhere('saleprice','LIKE', "%{$search}%")       
        ->orWhere('color','LIKE', "%{$search}%")       
        ->orWhere('status','LIKE', "%{$search}%") 
        ->get();
        return view('shop', compact('products'));      
    }
    public function filter(Request $request){
        $filterType = $request->type;
        $filterColor = $request->color;
        $filterPrice = $request->saleprice;
        if($filterPrice == 'a'){
            $math = '<';
        }else if($filterPrice == 'b'){
            $math = '>';
        }else{
            $math = '=';
        }
        $products = Products::query()
        ->where('type','=',"{$filterType}")
        ->orWhere('color','=', "{$filterColor}")
        ->orWhere('saleprice',"{$math}", 100)
        ->get();
        return view('shop', compact('products'));      
    }
    public function comment(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "message" => "required",
        ]);       
        $comment = new Comments;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->phone = $request->number;
        $comment->review = $request->message;
        $comment->save();
        return view('confirm');
    }
}


