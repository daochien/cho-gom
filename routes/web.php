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

/**
 * list route admin
*/

Route::group([], function() {

        Route::get('login', 'Admin\AuthenController@login')->name('login');
        Route::get('register', 'Admin\AuthenController@register')->name('register');

        Route::get('google/auth/login', 'Admin\AuthenController@redirectToProvider')->name('google.login');
        Route::get('google/auth/callback', 'Admin\AuthenController@handleProviderCallback')->name('google.callback');

        Route::get('logout', 'Admin\AuthenController@logout')->name('logout');

        Route::group([ 'prefix' => 'admin', 'as' => 'app.*' ], function () {
            Route::get('/', 'Admin\AppController@index')->name('index');
            Route::get('/{any}', 'Admin\AppController@index')->where('any', '.*');
        });

});
