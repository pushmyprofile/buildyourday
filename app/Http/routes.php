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

