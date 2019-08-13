<?php

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here is where you can register tenant routes for your application.
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');