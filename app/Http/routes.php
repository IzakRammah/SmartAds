<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['as' => 'home', function(){
	return view('index');
}]);
Route::get('login', ['as' => 'login', function(){
	return view('login');
}]);
Route::post('register', ['as' => 'register_post', 'uses' => 'Auth\AuthController@postRegister']);
Route::post('login', ['as' => 'login_post', 'uses' => 'Auth\AuthController@postLogin']);
Route::group(['middleware' => 'auth'], function () {
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
	Route::get('apanel', ['as' => 'apanel', function(){
		return view('admin.index');
	}]);
});
Route::group(['middleware' => 'App\Http\Middleware\ControlMiddleware'], function () {
	Route::get('cpanel', ['as' => 'cpanel', function(){
		return view('user.cpanel');
	}]);
	Route::get('profile', ['as' => 'profile_show', 'uses' => 'User\UserController@show']);
	Route::post('profile/{id}', ['as' => 'profile_update', 'uses' => 'User\UserController@update']);
});
Route::controllers(
[
	'password' => 'Auth\PasswordController'
]);