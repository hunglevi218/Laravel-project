@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Jordan New Collection!</h1>
                                <p>Satiny shine and iconic colors make for one cool kiddo. And how better to rock it
                                    than a pair of mini J's, with a supportive collar and rubber outsole? Trick
                                    question—Jordan is simply the best.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href="/shop/detail/25"><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
<div class="row single-slide">
    <div class="col-lg-5">
        <div class="banner-content">
            <h1>Air Max New Collection!</h1>
            <p>Push your style full speed ahead with the Nike Air Max 97 OG. Its iconic design takes
                inspiration from water droplets and Japanese bullet trains. Full-length Nike Air
                cushioning lets you ride in first class comfort.</p>
            <div class="add-bag d-flex align-items-center">
                <a class="add-btn" href="/shop/detail/26"><span class="lnr lnr-cross"></span></a>
                <span class="add-text text-uppercase">Add to Bag</span>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="banner-img">
            <img width="10px" class="img-fluid" src="img/banner/2.png" alt="">
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End banner Area -->


<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon1.png" alt="">
                    </div>
                    <h6>Free Delivery</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon2.png" alt="">
                    </div>
                    <h6>Return Policy</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon3.png" alt="">
                    </div>
                    <h6>24/7 Support</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon4.png" alt="">
                    </div>
                    <h6>Secure Payment</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Exclusive Hot Deal Ends Soon!</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('shop')}}" class="primary-btn">Shop Now</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="./img/banner/1-1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$110.00</h6>
                                <h6 class="l-through">$175.00</h6>
                            </div>
                            <h4>Nike Air Max 97</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href="/shop/detail/24"><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Add to Bag</span>
                            </div>
                        </div>
                    </div>
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="./img/banner/2-2.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$88.00</h6>
                                <h6 class="l-through">$135.00</h6>
                            </div>
                            <h4>Air Jordan 1 Mid SE</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href="/shop/detail/12"><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Add to Bag</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End exclusive deal Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Sale Products</h1>
                        <p>All products are discounted</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                @foreach($saleProducts as $row)
							<!-- single product -->
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<img class="img-fluid" src="{{ $row->img }}" alt="">
									<div class="product-details">
                                    @if( $row->status  == 'best seller' || $row->status  == 'coming')
                                        <h6 style="color: green">{{ $row->status }}</h6>
                                    @endif  
										<h6>{{ $row->name }}</h6>  
										<div class="price">
											<h6>${{ $row->saleprice }}</h6>
                                            @if($row->oldprice != 0)
                                            <h6 class="l-through">${{ $row->oldprice }}</h6>
                                            @endif
										</div>
										<div class="prd-bottom">

                                        <form method="post" class="social-info" style="cursor:pointer" action="{{route('cart.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$row->id}}" name="id"/>
                                                <input type="hidden" value="{{$row->name}}" name="name"/>
                                                <input type="hidden" value="{{$row->saleprice}}" name="price"/>
                                                <input type="hidden" value="{{$row->img}}" name="image"/>
                                                <input type="hidden" value="1" name="quantity"/>
												<span class="ti-bag" ></span>
												<button style="cursor:pointer;border:none;background-color:#ffffff; padding:0px; text-align:start" class="hover-text" type="submit">add to bag</button>
											</form>
											<a href="/shop/detail/{{ $row->id }}" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>
											</a>
										</div>
									</div>
								</div>
							</div>
                        @endforeach    
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Best Seller Products</h1>
                        <p>All best selling products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                @foreach($bestSellProducts as $row)
							<!-- single product -->
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<img class="img-fluid" src="{{ $row->img }}" alt="">
									<div class="product-details">
                                    @if( $row->status  == 'best seller' || $row->status  == 'coming')
                                        <h6 style="color: green">{{ $row->status }}</h6>
                                    @endif  
										<h6>{{ $row->name }}</h6>  
										<div class="price">
											<h6>${{ $row->saleprice }}</h6>
                                            @if($row->oldprice != 0)
                                            <h6 class="l-through">${{ $row->oldprice }}</h6>
                                            @endif
										</div>
										<div class="prd-bottom">

											
                                        <form method="post" class="social-info" style="cursor:pointer" action="{{route('cart.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$row->id}}" name="id"/>
                                                <input type="hidden" value="{{$row->name}}" name="name"/>
                                                <input type="hidden" value="{{$row->saleprice}}" name="price"/>
                                                <input type="hidden" value="{{$row->img}}" name="image"/>
                                                <input type="hidden" value="1" name="quantity"/>
												<span class="ti-bag" ></span>
												<button style="cursor:pointer;border:none;background-color:#ffffff; padding:0px; text-align:start" class="hover-text" type="submit">add to bag</button>
											</form>
											<a href="/shop/detail/{{ $row->id }}" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>
											</a>
										</div>
									</div>
								</div>
							</div>
                        @endforeach 
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->
@endsection
