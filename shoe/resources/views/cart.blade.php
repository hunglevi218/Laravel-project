@extends('layouts.app')
    @section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($cartItems as $items)
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img width='100' src="{{$items->attributes->image}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$items->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$items->price}}</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <form action="{{route('cart.update')}}" method="post">
                                            @csrf
                                            <input name="quantity" id="{{ $items->id }}" maxlength="100" value="{{ $items->quantity }}" title="Quantity:"
                                                class="input-text qty">                                         
                                            <input type="hidden" name="id" value='{{$items->id}}'>
                                            <button onclick="var result = document.getElementById('{{ $items->id }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                            <button onclick="var result = document.getElementById('{{ $items->id }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>                                                                                                             
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$items->price * $items->quantity}}</h5>
                                </td>
                                <td>
                                    <!-- HTML !-->
                                <button class="button-30 mb-2" role="button" style="display:block" type="submit">Update</button>
                                        </form>
                                    <form action="{{ route('cart.delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value='{{$items->id}}'>
                                        <button class="button-30" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Cost</h5>
                                </td>
                                <td>
                                    <h5>${{Cart::gettotal()}}</h5>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>
                                    <form action="{{route('cart.clear')}}" method="post">
                                        @csrf
                                        <button class="gray_btn" >Delete Cart</button>
                                    </form>
                                </td>
                                <td>
                                    
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="/shop">Continue Shopping</a>
                                        <a class="primary-btn" href="/checkout">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    @endsection