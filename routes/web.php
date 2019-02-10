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
}) -> name ('welcome');

Route::get('/about', function() {
	return view('about');
}) -> name('about');

Route::get('/contact', function() {
	return view('contact');
}) -> name('contact');

Route::get('/market', function() {
	return view('market');
}) -> name('market');

Route::get('/supplier', function() {
	return view('supplier');
}) -> name('supplier');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
