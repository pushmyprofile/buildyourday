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

//Get Homepage
Route::get('/', function () {
    return view('index');
});

//Get Pages
Route::get('how-it-works', 'PagesController@howitworks');
Route::get('pricing', 'PagesController@pricing');
Route::get('about-us', 'PagesController@aboutus');

//Authentication

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//Load User Profile
Route::get('dashboard/profile/', 'ProfilesController@show');
Route::get('dashboard/profile/edit', ['as' => 'profile.edit', 'uses' => 'PagesController@edit']);

//Load User Dashboard
Route::get('dashboard', 'DashboardController@home');

