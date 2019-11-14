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
URL::forceScheme("https");

Route::get('/', 'FrontEnd\HomeController@home')->name('home');
Route::get('/products', 'FrontEnd\HomeController@products')->name('products');
Route::get('/product-detail', 'FrontEnd\HomeController@detail')->name('detail');
Route::get('/cart', 'FrontEnd\HomeController@cart')->name('cart');
