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
    return view('index');
});

Route::get('/faq', function () {
	return view('faq');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('services', function () {
    return view('services');
});

Route::get('service/details', function () {
    return view('details');
});

Route::get('proprietes', function () {
	return view('proprietes');
});

Route::get('product-detail', function () {
	return view('product-detail');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
