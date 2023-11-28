 <!-- Start Header Area -->
 <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h d-flex" href="/"><img width="100px" src="{{ asset(url('img/nike.png')) }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav  navbar-nav menu_nav ml-auto">
                            <li class="nav-item {{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item submenu dropdown {{ Route::currentRouteNamed('shop') ? 'active' : '' }} {{ Route::currentRouteNamed('search') ? 'active' : '' }} {{ Route::currentRouteNamed('detail') ? 'active' : '' }} {{ Route::currentRouteNamed('filter') ? 'active' : '' }}">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="/filter?type=Jordan">Jordan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/filter?type=Air+max">Air Max</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/filter?type=Air+force">Air Force</a></li>
                                </ul>
                            </li>
                            <li class="nav-item {{ Route::currentRouteNamed('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                            <li class="nav-item submenu dropdown {{ Route::currentRouteNamed('login') ? 'active' : '' }} ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">User</a>
                                <ul class="dropdown-menu">
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">
                                                    {{ Auth::user()->name }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>                                           
                                    @endguest
                                    </a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item position-relative">
                                <a href="{{ route('cart') }}"
                                    class="cart">
                                    <span class="ti-bag"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="get" action="/search">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" name="keyword">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- <script>
        var path = window.location.href;
        var navItems = document.querySelectorAll(".nav-item");
        navItems.forEach(function(item){
            item.cartList.add('active');
        });
        console.log(navItems)
        
    </script> -->