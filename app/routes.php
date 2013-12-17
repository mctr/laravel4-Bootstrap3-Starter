<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('hello', 'HomeController@showWelcome');
Route::get('/', 'HomeController@getIndex');
Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('home', 'HomeController@getHome');
Route::get('register', 'HomeController@getRegister');
Route::post('register', 'HomeController@postRegister');
Route::get('logout', 'HomeController@logout');

Route::group(array('before' => 'auth'), function(){
	Route::get('admin', 'AdminController@getIndex');
});
