<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

Route::get('/rules', function () {
	return view('rules');
})->name('rules');

Route::get('/match', function () {
	return view('match');
})->name('match');

Route::get('/rank', function () {
	return view('rank');
})->name('rank');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
