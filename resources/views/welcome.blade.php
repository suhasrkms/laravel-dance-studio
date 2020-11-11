<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<title>LASYA</title>
  <!-- Scripts -->
  <link href="{{ asset('assets\lib\bootstrap\css\bootstrap.css') }}" rel="stylesheet" >
  <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\font-awesome\css\font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\animate\animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\ionicons\css\ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\owlcarousel\assets\owl.carousel.min.css') }}" rel="stylesheet">


</head>
<body>
	<header id="header">
		<div class="container-fluid">
			<div id="logo" class="pull-left">
				<h1><a href="#intro" class="scrollto">LASYA</a></h1>
			</div>
			<nav id="nav-menu-container">
            @if (Route::has('login'))
              				<ul class="nav-menu">
              @auth
					<li class="menu-active"><a href="{{ url('/home') }}">Home</a></li>
        @else
					<li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
					<li><a href="{{ route('register') }}">Register</a></li>
        @endif
    @endif
				</ul>
    @endif
			</nav><!-- #nav-menu-container -->
		</div>
	</header><!-- #header -->

	<!--==========================
	Slider
	============================-->
	<section id="intro">
		<div class="intro-container">
			<div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

				<ol class="carousel-indicators"></ol>

				<div class="carousel-inner" role="listbox">

					<div class="carousel-item active">
						<div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
						<div class="carousel-container" style="justify-content: center; align-items: center;">
							<div class="carousel-content">
								<h2 class="p-5">Online learning is the future of education, and it is happening right now all around us.</h2>
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
							</div>
						</div>
					</div>



					<div class="carousel-item">
						<div class="carousel-background"><img src="assets/img/intro-carousel/2.jpg" alt=""></div>
						<div class="carousel-container">
							<div class="carousel-content">
								<h2 class="p-5">We need to bring learning to people instead of people to learning</h2>
								<!--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
								<a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-background"><img src="assets/img/intro-carousel/3.jpg" alt=""></div>
						<div class="carousel-container">
							<div class="carousel-content">
								<h2 class="p-5">People expect to be bored by E-Learning, let's show them its doesn't have to be like that!</h2>
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</section><!-- #intro -->

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


		</body>
		</html>
