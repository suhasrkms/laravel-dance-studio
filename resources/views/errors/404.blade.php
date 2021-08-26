@extends('layouts.app')


  <link href="{{ asset('assets\admin\css\sb-admin-2.css') }}" rel="stylesheet">


@section('content')
<body id="page-top">
    
	</head>
  <!-- Begin Page Content -->
  <div class="container-fluid" style="padding-top:30vh; min-height:90vh;">

    <!-- 404 Error Text -->
    <div class="text-center">
      <div class="error mx-auto" data-text="404">404</div>
      <p class="lead text-gray-800 mb-5">Page Not Found</p>
      <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
      <a href="/home">&larr; Back to Home</a>
    </div>

  </div>
</body>
@endsection()
</html>
