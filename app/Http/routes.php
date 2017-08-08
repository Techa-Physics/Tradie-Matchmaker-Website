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

// Route::get('', function () {
    // return view('home.index');
// });

// Route::get('about', function () {
	// return view('home.about');
// });

// Route::get('user', function () {
	// return view('user.index');
// });

Route::get('/', 'HomeController@index');

Route::get('about', 'HomeController@about');

Route::get('user', 'UserController@index');