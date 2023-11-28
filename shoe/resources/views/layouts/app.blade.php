<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
   <!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{url('/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('/css/btnCart.css')}}">
	<link rel="stylesheet" href="{{url('/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{url('/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{url('/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{url('/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('/css/main.css')}}">

</head>
<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    <!-- script -->
    <script src="{{url('/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{url('/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{url('/js/jquery.sticky.js')}}"></script>
	<script src="{{url('/js/nouislider.min.js')}}"></script>
	<script src="{{url('/js/countdown.js')}}"></script>
	<script src="{{url('/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
	<script src="{{url('/js/gmaps.min.js')}}"></script>
	<script src="{{url('/js/main.js')}}"></script>
</body>
</html>
