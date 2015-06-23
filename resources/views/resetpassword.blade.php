@extends('app')

@section('pagecontent')
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			Click here to reset your password: {!! link_to('user/password/reset/'.$token) !!}
		</div>
	</div>
</div>
@endsection