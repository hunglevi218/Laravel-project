<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList(){
        $cartItems = \Cart::getContent();
        return view('cart', compact('cartItems'));
    }
    public function addToCart(Request $request){
        \Cart::add([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'attributes'=> array(
                'image' => $request->image
            )
        ]);
        // session()->flash('success','Product is added to cart successfully !');
        return redirect()->route('cart');
    }
    public function updateCart(Request $request){
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        return redirect()->route('cart');
    }

    public function removeCart(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart');
    }
    public function cleaAllCart(){
        \Cart::clear();
        return redirect()->route('cart');
    }
    public function checkout(){
        $cartItems = \Cart::getContent();
        return view('checkout', compact('cartItems'));
        // return  $cartItems;
    }
}
