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

Route::get('/', 'viewcontroller@index');

Route::get('login', 'viewcontroller@login');

Route::get('krisan', 'viewcontroller@krisan');

Route::get('edit', 'viewcontroller@edits');

Route::get('tampil', 'viewcontroller@tampil');