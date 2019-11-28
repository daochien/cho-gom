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
Route::get('/die-web', 'FrontEnd\HomeController@dieWeb')->name('dieWeb');

/**
 * list route admin
*/



Route::group([ 'prefix' => 'admin', 'as' => 'admin.' ], function () {

    Route::get('login', 'Admin\AuthenController@login')->name('login');
    Route::post('signIn', 'Admin\AuthenController@signIn')->name('signIn');

    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('logout', 'Admin\AuthenController@logout')->name('logout');
        Route::get('/', 'Admin\AppController@index')->name('index');
        Route::get('/{any}', 'Admin\AppController@index')->where('any', '.*');
    });

});
