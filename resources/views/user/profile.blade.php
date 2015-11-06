<!DOCTYPE html>
<html>

<body>
	<form class="form" action="{{ route('profile_update', $user['id']) }}" method="POST" accept-charset="UTF-8">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input name="name" value="{{ $user['name'] }}" type="text" class="form-control" placeholder="Full Name"></br>
		<input name="email" value="{{ $user['email'] }}" type="text" class="form-control" placeholder="Email"></br>
		<input name="password" type="password" class="form-control" placeholder="Password"></br>
		<input name="password_confirmation" type="password" class="form-control" placeholder="Repeat Password"></br>
		<input name="mobile" value="{{ $user['mobile'] }}" type="tel" class="form-control" placeholder="Mobile"></br>
		<input name="security_code" value="{{ $user['security_code'] }}" type="number" class="form-control" placeholder="security_code"></br>
		<input name="address" value="{{ $user['address'] }}" type="text" class="form-control" placeholder="address"></br>
		<input name="country" value="{{ $user['country'] }}" type="text" class="form-control" placeholder="country"></br>
		<input name="city" value="{{ $user['city'] }}" type="text" class="form-control" placeholder="city"></br>
		<input type="submit" class="btn btn-info btn-submit" value="update"></br>
	</form>
</body>

</html>