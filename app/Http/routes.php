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

Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');

Route::get('profile', 'ProfileController@index');

// Advertisement routes
Route::resource('reviews','ReviewsController');

Route::resource('advertisements','AdvertisementsController');
Route::resource('searches','SearchesController');

Route::group(['middleware'], function() {

    Route::get('advertisements/create', [    
        'uses' => 'AdvertisementsController@create',
        'as' => 'advertisements.create',
        'middleware' => 'roles',
        'roles' => ['Business']
    ]);

    Route::get('reviews/{reviews}/create', [
        'uses' => 'ReviewsController@create',
        'as' => 'reviews.create'
    ]);

    Route::post('reviews/{reviews}', [
        'uses' => 'ReviewsController@store',
        'as' => 'reviews.store'
    ]);

     Route::get('searches/create', [    
         'uses' => 'SearchesController@create',
         'as' => 'searches.create',
         'middleware' => 'roles',
         'roles' => ['Personal']
     ]);

    Route::get('searches/{searches}',[
        'uses' => 'SearchesController@index',
        'as' => 'searches.index'
    ]);
});

// Code below used from 
// https://laravel.com/docs/5.1/authentication

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes
route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
route::post('password/reset', 'Auth\PasswordController@postReset');

