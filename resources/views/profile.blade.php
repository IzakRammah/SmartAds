@extends('master') @section('content')
<div class="jumbotron">
  <div class="container">
    <strong>
      <h1>Edit Profile</h1>
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
      </div>
    </div>
  </div>
</div>
@endsection
