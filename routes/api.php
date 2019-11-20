<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('register', 'Api\CategoriesController@register')->name('register');
Route::post('login', 'Api\CategoriesController@login')->name('login');

Route::group(['middleware' => 'auth.admin'], function() {
    Route::group(['prefix' => 'categories', 'as' => 'api.categories.'], function() {
        Route::post('create', 'Api\CategoriesController@create')->name('create');
    });
});
