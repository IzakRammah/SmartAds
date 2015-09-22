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
Route::get('control-panel', ['as' => 'control-panel', function(){
    return view('user.control-panel');
}]);
Route::get('admin', ['as' => 'admin-panel', function(){
    return view('admin.index');
}]);
Route::get('auth/register', ['as' => 'getRegister', function(){
    return view('auth.register');
}]);
Route::get('auth/login', ['as' => 'getLogin', function(){
    return view('auth.login');
}]);
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::post('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);
Route::post('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::controllers(
[
    'auth/password' => 'Auth\PasswordController',
    'auth' => 'Auth\AuthController',
]);

Route::get('auth', 'User\UserController@loggedin');
