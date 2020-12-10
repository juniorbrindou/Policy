<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Inspiring;


Route::GET('/', function () {
	$quote = Inspiring::quote();
	return view('welcome',compact('quote'));
});

Auth::routes();

Route::GET('/home', 'HomeController@index')->name('home');


Route::name('users.')->middleware('auth')->group(function () {
	Route::PUT('/users/restaurer/{user}','UserController@restaure')->name('restaurer');
	Route::GET('/users','UserController@index')->name('users');
	Route::DELETE('destroy/{user}','UserController@destroy')->name('destroy');
	Route::GET('trash','UserController@showDeleted')->name('trash');
});