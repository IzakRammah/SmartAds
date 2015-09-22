<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SmartAds</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <!--[if IE 7]>
         <link rel="stylesheet" href="css/ie7.css">
      <![endif]-->
  <!--[if IE 8]>
         <link rel="stylesheet" href="css/ie8.css">
      <![endif]-->
  <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap-custom.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> @yield('extra-css')
</head>

<body>
  <nav id="top-navbar" class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">SmartAds</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li id="home-nav"><a href="{{route('home')}}">Homepage <span class="sr-only">(current)</span></a></li>
        </ul>
        @if(\Auth::check())
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{\Auth::User()->name}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('control-panel')}}">Control Panel</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
          <li id="register-nav"><a href="{{route('getRegister')}}">Register</a></li>
          <li id="login-nav"><a href="{{route('getLogin')}}">Login</a></li>
        </ul>
        @endif
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  @yield('content')
  <script src="{{ asset('lib/jquery/jquery-1.11.3.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  @yield('extra-js')
</body>

</html>
