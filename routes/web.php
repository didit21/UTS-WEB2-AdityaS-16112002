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
    return view('home');
});
route::get('login', function(){
	return view('login');
});
route::get('krisan', function(){
	return view('krisan');
});
route::get('edit', function(){
	return view('edit');
});