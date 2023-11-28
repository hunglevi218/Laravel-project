@extends('layouts.app')
    @section('content')
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Checkout</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($cartItems as $row)
							<tr>
								<td>
									<p>{{$row->name}}</p>
								</td>
								<td>
									<p>${{$row->price}}</p>
								</td>
								<td>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x{{$row->quantity}}</p>
								</td>
                                <td>
									<p>${{$row->price * $row->quantity}}</p>
								</td>
							</tr>
                            @endforeach
                            <tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>${{Cart::gettotal()}}</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

    @endsection