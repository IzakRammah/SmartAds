<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Smarads</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN CORE CSS FRAMEWORK -->
  <link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
  <!-- END CORE CSS FRAMEWORK -->
  <!-- BEGIN CSS TEMPLATE -->
  <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/login.css" rel="stylesheet" type="text/css" />
  <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="error-body no-top lazy" data-original="admin/assets/img/work.jpg" style="background-image: url('admin/assets/img/work.jpg')">
  <div class="container">
    <div class="row login-container animated fadeInUp">
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40">
          <h5 class="text-primary pull-right home-link"><a href="{{route('home')}}">Home Page</a></h5>
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            There were some problems with your input.
            <br>
            <br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <h2 class="normal">Sign in to Smartads</h2>
          <p>If you have already registered, submit your login information.
            <br>
          </p>
          <p class="p-b-20">Sign up Now! for Smartads accounts, and start campaigns.</p>
          <button type="button" class="btn btn-primary btn-cons" id="login_toggle">Login</button> or&nbsp;&nbsp;
          <button type="button" class="btn btn-info btn-cons" id="register_toggle"> Create an account</button>
        </div>
        <div class="tiles grey p-t-20 p-b-20 text-black">
          <form id="frm_login" class="animated fadeIn" action="{{route('login_post')}}" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6 ">
                <input name="email" id="login_email" type="text" class="form-control" placeholder="Email / Mobile" autofocus="">
              </div>
              <div class="col-md-6 col-sm-6">
                <input name="password" id="login_password" type="password" class="form-control" placeholder="Password">
              </div>
            </div>
            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="control-group  col-md-10">
                <div class="checkbox checkbox check-success"> <a href="#">Forget your password?</a>&nbsp;&nbsp;
                  <input type="checkbox" id="remember" value="1" name="remember">
                  <label for="remember">Keep me reminded </label>
                </div>
              </div>
            </div>
            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="control-group col-md-12">
                <button type="submit" class="btn btn-info btn-submit">
                  Submit
                </button>
              </div>
            </div>
          </form>
          <form id="frm_register" class="animated fadeIn" style="display:none" action="{{route('register_post')}}" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 col-sm-12">
                <input name="name" id="reg_name" type="text" class="form-control" placeholder="Full Name">
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 ">
                <input name="email" id="reg_email" type="text" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6">
                <input name="password" id="reg_password" type="password" class="form-control" placeholder="Password">
              </div>
              <div class="col-md-6 col-sm-6">
                <input name="password_confirmation" id="reg_password_confirmation" type="password" class="form-control" placeholder="Repeat Password">
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6">
                <input name="mobile" id="reg_mobile" type="tel" class="form-control" placeholder="Mobile">
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 col-sm-12">
                <input type="submit" class="btn btn-info btn-submit" value="Submit">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN CORE JS FRAMEWORK-->
  <script src="admin/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
  <script src="admin/assets/js/login_v2.js" type="text/javascript"></script>
  <script>
    $(function() {

    });
  </script>
  <!-- BEGIN CORE TEMPLATE JS -->
  <!-- END CORE TEMPLATE JS -->
</body>

</html>
