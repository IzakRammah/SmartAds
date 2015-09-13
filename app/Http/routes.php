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

Route::get('/', function () {
    return view('welcome');
});
Route::post('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);
Route::post('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::controllers(
[
    'auth/password' => 'Auth\PasswordController',
    'auth' => 'Auth\AuthController',
]);

Route::get('auth', 'User\UserController@loggedin');
