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

Route::get('/', "index@index");



Route::get('/news', "index@news");

Route::get('/news_info/{news_id}', "index@news_info");

Route::get('/contact_us', "index@contact_us");


Auth::routes();










