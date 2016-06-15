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

Route::get('/', 'WelcomeController@index');
Route::get('welcome', 'WelcomeController@index');

Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function()
{
	// Only authenticated users may enter...

	Route::resource('interview', 'InterviewController');
	Route::resource('ideate', 'IdeateController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('mediacontent', 'MediaContentController');

Route::post('upload', 'MediaContentController@upload');