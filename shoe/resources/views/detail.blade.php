@extends('layouts.app')
@section('content')


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset($products->img1) }}" alt="#">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset($products->img2) }}" alt="#">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset($products->img3) }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$products->name}}</h3>
						<h2>${{$products->saleprice}}</h2>
						<ul class="list">
							<li><a class="active"><span>Type</span> : {{$products->type}}</a></li>
							<li><a ><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p style="text-align: justify">{{$products->description}}</p>
						<div class="card_area d-flex align-items-center">
						<form method="post" class="social-info" style="cursor:pointer" action="{{route('cart.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$products->id}}" name="id"/>
                                                <input type="hidden" value="{{$products->name}}" name="name"/>
                                                <input type="hidden" value="{{$products->saleprice}}" name="price"/>
                                                <input type="hidden" value="{{$products->img}}" name="image"/>
                                                <input type="hidden" value="1" name="quantity"/>
												<button class="primary-btn" style="cursor:pointer; border:none">Add to Cart</button>
											</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs text-start" id="myTab" role="tablist">
				<li class="nav-item">
					<h4 style="font-weight: 700" class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">COMMENT</h4 style="color:orange">
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="review_list">
							<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('img/product/review-1.png')}}" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('img/product/review-2.png')}}" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('img/product/review-3.png')}}" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								@foreach ($comment as $row)
								<div class="review_item">
									<div class="media">
										<div class="media-body">
											<h4>{{$row->name}}</h4>
										</div>
									</div>
									<p>{{$row->review}}</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<form class="row contact_form" action="/confirm" method="post" id="contactForm" novalidate="novalidate">
									@csrf
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	

@endsection
