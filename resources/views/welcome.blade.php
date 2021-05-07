<!DOCTYPE html>
<html>
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
		background: url(assets/img/loading/Preloader_7.gif) center no-repeat #fff;
	}
	</style>

	<!-- Scripts -->
	<link href="{{ asset('assets\lib\bootstrap\css\bootstrap.css') }}" rel="stylesheet" >
	<link href="{{ asset('assets\css\styles.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\font-awesome\css\font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\animate\animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\ionicons\css\ionicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\lib\owlcarousel\assets\owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets\css\responsive.css') }}" rel="stylesheet">


	<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

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
						<div class="carousel-background"><img src="assets/img/intro-carousel/1.png" alt=""></div>
						<div class="carousel-container" style="justify-content: center; align-items: center;">
							<div class="carousel-content">
								<h2 class="p-5">To dance is to be out of yourself. Larger, more beautiful, more powerful ...</h2>
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
							</div>
						</div>
					</div>



					<div class="carousel-item">
						<div class="carousel-background"><img src="assets/img/intro-carousel/2.jpg" alt=""></div>
						<div class="carousel-container">
							<div class="carousel-content">
								<h2 class="p-5">Dance is not about your age or how good you are. It's about supporting each other, and having fun </h2>
								<!--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
								<a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-background"><img src="assets/img/intro-carousel/3.jpg" alt=""></div>
						<div class="carousel-container">
							<div class="carousel-content">
								<h2 class="p-5">There are shortcuts to happiness and dancing is one of them.</h2>								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</section><!-- #intro -->

	<!--==========================
	About Us Section
	============================-->
	<section id="about">
		<div class="container">
			<header class="section-header">
				<h3>About Us</h3>
				<p>
					{{-- As friends we are ready to accompany you with your journey of undergraduate studies, we are with full confident on make your UG college studies easy and valuable,UG hub is a concept of friend teaching his best friend. I am ready with all the tools that makes you a best student in your academic year. --}}
					The term ‘Lasya‘, in the context of Hindu Mythology, stands for the dance performed by Goddess Parvati. Lasya means beauty, happiness and grace. Lasya Dance Studio is an institution that share the happiness, grace rhythm of dance. Join us and explore the glimpse of dance.
				</p>
			</header>

			<div class="row about-cols">

				<div class="col-md-4 wow fadeInUp">
					<div class="about-col">
						<div class="img">
							<img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
							<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
						</div>
						<h2 class="title"><a href="#">Our Mission</a></h2>
						<p>
							We bring up experiencing learning into education system. Philosophy of education has been defined as an attempt to find answers to questions. Our attempts is find answers through craft, art, health and education should all be integrated into one scheme.
						</p>
					</div>
				</div>


				<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
					<div class="about-col">
						<div class="img">
							<img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
							<div class="icon"><i class="ion-ios-list-outline"></i></div>
						</div>
						<h2 class="title"><a href="#">Our Plan</a></h2>
						<p>
							For those who do have access to the right technology, there is evidence that learning online can be more effective in a number of ways. It enables us to reach out to Learners more effectively through Digital medium. Hence we are ready with best platform called UGhub.
						</p>
					</div>
				</div>

				<div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
					<div class="about-col">
						<div class="img">
							<img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
							<div class="icon"><i class="ion-ios-eye-outline"></i></div>
						</div>
						<h2 class="title"><a href="#">Our Vision</a></h2>
						<p>
							Adopting digital technology in education is the most cost-effective way to drive economic development, That's why we’ll continue directing our program, toward a future version learning where every student will have access to the quality education they deserve.
						</p>
					</div>
				</div>

			</div>

		</div>
	</section><!-- #about -->


	<section>
		<!-- statistics -->
	<div class="statistics">
		<div class="container" style="padding-top:50px; padding-bottom:20px;">
			<div class="row">
			<div class="col-md-6">
				<div class="">
					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UhVjp48U2Oc" allowfullscreen></iframe>
							<!-- https://www.youtube.com/embed/UhVjp48U2Oc -->
					</div>
					<!-- <img src="https://www.youtube.com/embed/UhVjp48U2Oc" class="img-responsive img-fluid"></img>
					<a class="w3ls_play_icon popup-with-zoom-anim" href="#small-dialog">
						<i class="fa fa-play" aria-hidden="true"></i>
					</a> -->
				</div>
			</div>
			<div class="col-md-6 pt-4 text-light">
				<h4>Nulla faucibus mauris ac leo imperdiet, id auctor urna consectetur</h4>
				<div class="row text-center pt-4 pt-md-0">
				<div class="col-md-4">
					<h3 id="w3l_stats1" class="odometer">10</h3>
					<p>Years of Experience</p>
				</div>
				<div class="col-md-4">
					<h3 id="w3l_stats2" class="odometer">3</h3>
					<p>Awards Winning</p>
				</div>
				<div class="col-md-4">
					<h3 id="w3l_stats3" class="odometer">{{ $count }}</h3>
					<p>Students</p>
				</div>

				</div>
			</div>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //statistics -->
	</section>


	<section id="portfolio">

		<div class="container">
			<div class="center">
				<h2>Our Teachers</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>


			</div>

			<ul class="portfolio-filter text-center">
				<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".Western">Western</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".Contemporary">Contemporary</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".Bharatanatyam">Bharatanatyam</a></li>
			</ul><!--/#portfolio-filter-->
		</div>
		<div class="container">

			<div class="portfolio-items">
				@foreach ($teachers as $teacher)

					<div class="portfolio-item {{ $teacher->style }} col-xs-12 col-sm-4 col-md-3">
						<div class="recent-work-wrap">
							<img class="img-responsive pl-3" style="height:220px; width:290px;" src="/TeachersImages/{{ $teacher->dp_path }}" alt="">
							<div class="overlay">
								<div class="recent-work-inner">
									<div class="text-dark display-4 pt-4">{{ $teacher->name }}</div>
									<a href="" data-toggle="modal" data-target="#{{ $teacher->id }}" class="text-primary"><i class="fa fa-eye"></i> View</a>
								</div>
							</div>
							</img>
						</div>
					</div><!--/.portfolio-item-->


				<!-- Modal -->
				<div id="{{ $teacher->id }}" class="modal fade" role="dialog">

					<div class="modal-dialog modal-lg">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Teachers Details</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="row">

									<div class="col-md-6">
										<div class="profile-img">
											<img class="rounded mx-auto d-block" style="height:183px; width:275px;" src="/TeachersImages/{{ $teacher->dp_path }}" alt=""/>
										</div>
									</div>

									<div class="col-md-6 pt-4" style="line-height: 1px;">
										<div class="profile-head">
											<h4 style="color: #0062cc;">
												{{ $teacher->name }}
											</h4>
											<h6 style="color: #333;">
												{{ $teacher->information }}
											</h6>
											<span class="heading">User Rating :</span>
											@for ($i = 0; $i < $teacher->rating; $i++)
												<span class="fa fa-star" style="color:#ffc200;"></span>
											@endfor
											@for ($i=$teacher->rating; $i < 5; $i++)
													<span class="fa fa-star"></span>
											@endfor
											<h6>Knows : {{ $teacher->style }}</h6>

										</div>
									</div>

								</div>
							</div>

							{{-- <div class="modal-body">

									<div class="d-inline"> <span>{{ $teacher->name }} <br> {{ $teacher->information }} <br>

										<span class="heading">User Rating :</span>
										@for ($i = 0; $i < $teacher->rating; $i++)
											<span class="fa fa-star" style="color:#ffc200;"></span>
										@endfor
										@for ($i=$teacher->rating; $i < 5; $i++)
												<span class="fa fa-star"></span>
										@endfor
									</span>
								</div>
									<div class="d-inline float-right"> <img height="90px" width="90px" src="/TeachersImages/{{ $teacher->dp_path }}" class="rounded-circle" width="70">
								</div>
							</div> --}}

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>
			@endforeach

				{{-- <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src="assets/img/portfolio/recent/item5.png" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<div class="text-dark display-4 pt-4">Name</div>
								<a href="" data-toggle="modal" data-target="#myModal" class="text-primary"><i class="fa fa-eye"></i> View</a>
							</div>
						</div>
					</div>
				</div><!--/.portfolio-item--> --}}



			</div>
		</div>
	</section><!--/#portfolio-item-->

	<!--==========================
	Contact US
	============================-->
	<section id="contact" class="section-bg wow fadeInUp">
	  <div class="container">

	    <div class="section-header">
	      <h3>Contact Us</h3>
	    </div>

	    <div class="row contact-info">

	      <div class="col-md-4">
	        <div class="contact-address">
	          <i class="ion-ios-location-outline"></i>
	          <h3>Address</h3>
	          <address>Bengaluru, Karnataka - 560061, INDIA</address>
	        </div>
	      </div>

	      <div class="col-md-4">
	        <div class="contact-phone">
	          <i class="ion-ios-telephone-outline"></i>
	          <h3>Phone Number</h3>
	          <p>+91 9945887177</p>
	        </div>
	      </div>

	      <div class="col-md-4">
	        <div class="contact-email">
	          <i class="ion-ios-email-outline"></i>
	          <h3>Email</h3>
	          <p><a href="mailto:support@ughub.in">support@ughub.in</a></p>
	        </div>
	      </div>

	    </div>

	  </div>
	</section><!-- #contact -->

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

			<!-- for to the isotope -->
			<script src="{{ asset('assets/lib/isotope/jquery.isotope.min.js') }}"></script>

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

			<!-- javascript main -->

			<!-- loading -->
			<script>
			$(window).load(function()
			{
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");;
			});
			</script>


		</body>
		</html>
