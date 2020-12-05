<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Inspiring;


Route::get('/', function () {
	$quote = Inspiring::quote();
    return view('welcome',compact('quote'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','UserController@index')->middleware('auth')->name('users');
Route::Post('users/restaurer/{user}','UserController@restaure')->middleware('auth')->name('users.restaurer');
Route::delete('users/destroy/{user}','UserController@destroy')->middleware('auth')->name('users.destroy');
Route::get('users/trash','UserController@showDeleted')->middleware('auth')->name('users.trash');
