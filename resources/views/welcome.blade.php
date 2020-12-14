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
      About Us Section
    ============================-->
	<section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>
			As friends we are ready to accompany you with your journey of undergraduate studies, we are with full confident on make your UG college studies easy and valuable,UG hub is a concept of friend teaching his best friend. I am ready with all the tools that makes you a best student in your academic year.
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


		<section id="portfolio">
        <div class="container">
            <div class="center">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->
		</div>
		<div class="container">
            <div class="">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="assets/img/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="assets/img/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="assets/img/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="assets/img/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="assets/img/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/img/portfolio/recent/item8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="assets/img/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

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
			<script src="{{ asset('assets/lib/jquery/jquery.isotope.min.js') }}"></script>

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

			<!-- javascript main -->
			<script src="{{ asset('assets/lib/functions/functions.js') }}"></script>

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


		</body>
		</html>
