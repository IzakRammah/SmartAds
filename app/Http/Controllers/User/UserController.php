<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function show()
	{
		$user = Auth::User();
		return view('user.profile', compact('user'));
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, array(
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users,email,' . $id,
			'password' => 'required|confirmed|min:6',
			'mobile' => 'required|min:10|max:20|unique:users,mobile,' . $id,
			'address' => 'required|max:128',
			'country' => 'required|max:64',
			'city' => 'required|max:64',
			'security_code' => 'required|size:4',
		));
		$user = User::find($id);
		$user->update([
			'name' => $request['name'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
			'address' => $request['address'],
			'mobile' => $request['mobile'],
			'country' => $request['country'],
			'city' => $request['city'],
			'security_code' => $request['security_code'],
		]);
		return redirect()->route('home');
	}
}