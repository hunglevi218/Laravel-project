<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->select('*');
        $products = $products->get();
        return view("admin.products.list", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            "Code" => "required",
            "Name" => "required",
            "Description" => "required",
            "Image" => "required",
            "Image1" => "required",
            "Image2" => "required",
            "Image3" => "required",
            "saleprice" => "required",
            "type" => "required",
            "status" => "required"
        ]);
    
        $products = new Products;
        $products->code = $request->Code;
        $products->name = $request->Name;
        $products->description = $request->Description;
        $products->img = $request->Image;
        $products->img1 = $request->Image1;
        $products->img2 = $request->Image2;
        $products->img3 = $request->Image3;
        $products->oldprice = $request->oldprice;
        $products->saleprice = $request->saleprice;
        $products->type = $request->type;
        $products->color = $request->color;
        $products->status = $request->status;
        $products->save();
        return redirect()->action([ProductsController::class,'create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('admin.products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->code = $request->Code;
        $products->name = $request->Name;
        $products->description = $request->Description;
        $products->img = $request->Image;
        $products->oldprice = $request->oldprice;
        $products->saleprice = $request->saleprice;
        $products->type = $request->type;
        $products->color = $request->color;
        $products->status = $request->status;
        $products->save();
        return redirect()->action([ProductsController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();
        return redirect()->action([ProductsController::class,'index']);
    }
}
