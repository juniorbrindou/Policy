<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Inspiring;


Route::get('/', function () {
	$quote = Inspiring::quote();
    return view('welcome',compact('quote'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','UserController@all')->middleware('auth')->name('users');
