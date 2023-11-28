<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $saleProducts = Products::query()
        ->where('status', '=', 'sale')
        ->get();
        $bestSellProducts = Products::query()
        ->where('status', '=', 'best seller')
        ->get();
        return view('home', compact('saleProducts', 'bestSellProducts')); 
    }
}
