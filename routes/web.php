<?php

Route::get('/', 'welcomeController@welcome');

Auth::routes();
Route::get('/disable','UserController@disable');

Route::middleware(['auth','disable'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('users','UserController')->except(['store','create']);
	Route::get('users/status/{user}','UserController@status')->name('users.status');
});