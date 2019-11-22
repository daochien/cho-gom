<?php

Route::group(['middleware' => 'auth.admin'], function() {
    Route::group(['prefix' => 'categories', 'as' => 'application.categories.'], function() {
        Route::post('create', 'Admin\CategoriesController@create')->name('create');
        Route::post('update', 'Admin\CategoriesController@update')->name('update');
        Route::post('remove', 'Admin\CategoriesController@remove')->name('remove');
        Route::get('categories', 'Admin\CategoriesController@categories')->name('categories');
    });
    Route::group(['prefix' => 'product', 'as' => 'application.product.'], function() {
        Route::post('create', 'Admin\ProductController@create')->name('create');
        Route::post('update', 'Admin\ProductController@update')->name('update');
        Route::post('remove', 'Admin\ProductController@remove')->name('remove');
        Route::get('products', 'Admin\ProductController@products')->name('products');
    });
});
