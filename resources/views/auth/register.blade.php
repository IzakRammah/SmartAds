@extends('master') @section('content')
<div class="jumbotron">
  <div class="container">
    <strong>
      <h1>Register</h1>
    </strong>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="well">
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

        <form id="register-form" class="form-horizontal" action="{{route('register')}}" method="post" role="form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">E-Mail Address</label>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="password" class="form-control" name="password">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Confirm Password</label>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-repeat"></i></span>
              <input type="password" class="form-control" name="password_confirmation">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                Register
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('extra-js')
<script>
$(function(){
  $('#register-nav').addClass('active')
});
</script>
@endsection
