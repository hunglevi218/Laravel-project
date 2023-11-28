 @extends('layouts.app')
 @section('content')
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shop Category</h1>
                    <nav class="d-flex align-items-center">
                        <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Fashon Category</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5" style="margin-top: 25px">
                <div class="sidebar-categories sidebar-filter mt-50" style="margin-top: 0;">
                    <form action="{{route('shop')}}" method="get">
                        <button  class="top-filter-head head" style="background-color: #adafab;color: #ffffff; border:none; width: 100%; cursor:pointer; text-align:start">All Product</button>
                    </form> 

                    <form action="{{route('filter')}}" method="get">
                    
                        <div class="common-filter">
                            <div class="head mb-3" style="background-color: #adafab; color: #ffffff">Type</div>  
                                <form>
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple"
                                            name="type" value="Jordan"><label for="apple">Jordan<span></span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus"
                                            name="type" value="Air max"><label for="asus">Air Max<span></span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee"
                                            name="type" value="Air force"><label for="gionee">Air Force<span></span></label></li>
                                </ul>
            
                        </div>
                        <div class="common-filter">
                            <div class="head mb-3" style="background-color: #adafab; color: #ffffff">Color</div>
                                
                                <ul>
                                    
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather"
                                            name="color" value="red"><label for="balckleather">Red<span/span></label></li>
                                    <li class="filter-list" ><input class="pixel-radio" type="radio" id="blackred"
                                            name="color" value="green"><label for="blackred">Green<span></span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gold"
                                            name="color" value="pink"><label for="gold">Pink<span</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey"
                                            name="color" value="white"><label for="spacegrey">White<span></span></label></li>
                                </ul>
                                
                        </div>
                        <div class="common-filter">
                            <div class="head mb-3" style="background-color: #adafab; color: #ffffff">Price</div>
                            <ul>
                                    
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather"
                                            name="saleprice" value="a"><label for="balckleather">< $100<span/span></label></li>
                                    <li class="filter-list" ><input class="pixel-radio" type="radio" id="blackred"
                                            name="saleprice" value="b"><label for="blackred">>= 100<span></span></label></li>
                                </ul>
                        </div>
                  
                        <button class="primary-btn" style="background-color: #adafab;color: #ffffff; border:none; width: 100%; cursor:pointer; text-align:center" type="submit">Filter</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
						@foreach($products as $row)
							<!-- single product -->
							<div class="col-lg-4 col-md-6">
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
                </section>
            </div>
        </div>
    </div>
    @endsection