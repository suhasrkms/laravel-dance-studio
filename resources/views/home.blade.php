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
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
  <link href="{{ asset('assets\lib\bootstrap\css\bootstrap.css') }}" rel="stylesheet" >
  <link href="{{ asset('assets\css\styles.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\font-awesome\css\font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\animate\animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\ionicons\css\ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\lib\owlcarousel\assets\owl.carousel.min.css') }}" rel="stylesheet">

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
          <li class="menu-has-children"><a href="">{{ Auth::user()->name }}</a>
            <ul>
              <li><a href="/home/profile/{{ Auth::user()->id }}/edit">Profile</a></li>
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

<body style="padding-top:6rem;">
  <section style="min-height:500px;">
    <div class="container-fluid">

      <div class="row px-4">

        <div class="col-md-3 px-3">
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item text-center">
                <a href="/Account/Login" class="btn btn-info btn-block">Login/Register</a></td>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-9 p-md-0 p-3">
          <div class="row">

            <div class="col-sm-4">
              <div class="custom-card custom-card-1">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-md-0 pt-3">
              <div class="custom-card custom-card-2">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-md-0 pt-3">
              <div class="custom-card custom-card-3">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-3">
              <div class="custom-card custom-card-3">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-3">
              <div class="custom-card custom-card-1">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-3">
              <div class="custom-card custom-card-2">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
</section>
</body>
<!--==========================
Footer
============================-->
<footer id="footer" >
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Lasya</strong>. All Rights Reserved <br>
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
