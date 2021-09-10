<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Lasya') }}</title>

	<!-- Loding Scripts -->
	<style>
	.no-js #loader
	{
		display: none;
	}
	.js #loader
	{
		display: block;
		position: absolute;
		left: 100px;
		top: 0;
	}
	.se-pre-con
	{
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url(/assets/img/loading/Preloader_7.gif) center no-repeat #fff;
	}
	</style>


	<!-- Scripts -->
	<link href="{{ asset('assets\lib\bootstrap\css\bootstrap.css') }}" rel="stylesheet">
	@yield('css')
	<link href="{{ asset('assets\css\styles.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\font-awesome\css\font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\animate\animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\ionicons\css\ionicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\owlcarousel\assets\owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\toastr\toastr.css') }}" rel="stylesheet">

</head>
<body>
	<div class="se-pre-con"></div>
	<header id="header"
	style="background: rgba(0, 0, 0, 0.9);
	padding: 20px 0;
	height: 72px;
	transition: all 0.5s;">
	<div class="container-fluid">
		<div id="logo" class="pull-left">
			<h1><a href="{{ url('/') }}" class="scrollto">
				LASYA
			</a></h1>
		</div>
		<nav id="nav-menu-container">
			<ul class="nav-menu">
				@guest
					<li class="menu-active">
						<a href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					@if(Route::has('register'))
						<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
					@endif
				@else
					<li><a href="{{ url('/home') }}">Home</a></li>
					@if(Auth::user()->role == 'admin')
						<li><a href="{{ url('/admin') }}">Admin</a></li>
					@elseif(Auth::user()->role == 'teacher')
						<li><a href="{{ url('/home/add-class') }}">Add Class</a></li>
					@endif
					<li class="menu-has-children"><a href="">{{ Auth::user()->name }}</a>
						<ul>
							<li><a href="/home/profile">Profile</a></li>
							<li><a href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</li>
						@endguest
					</ul>
				</li>
			</ul>
		</nav><!-- #nav-menu-container -->
	</div>
</header><!-- #header -->

@yield('content')

<!--==========================
Footer
============================-->
<footer id="footer">
	<div class="container">
		<div class="copyright">
			&copy; Copyright <strong>UGHUB</strong>. All Rights Reserved <br>
			<a href="privacypolicys.html">Privacy Policy</a>
			<a class="pl-3" href="faqs.html">FAQ's</a>

		</footer><!-- #footer -->


		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


		<!-- jquerys -->
		<script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js') }}"></script>

		<!-- bootstrap -->
		<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- for to the top animation -->
		<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>

		<!-- superfish for slider bg adjust -->
		<script src="{{ asset('assets/lib/superfish/hoverIntent.js') }}"></script>
		<script src="{{ asset('assets/lib/superfish/superfish.min.js') }}"></script>

		<!-- wow animation -->
		<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>

		<!-- slider animation for sliding left or right ( swipe ) -->
		<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>

		<!-- javascript main -->
		<script src="{{ asset('assets/js/main.js') }}"></script>

		<!-- javascript error -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

		<!-- loading -->
		<script>
		$(window).load(function()
		{
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
		</script>

		{{-- Erroe Model --}}
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

		@yield('javascript')

		{{-- <script>
		$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script> --}}

</body>
</html>
