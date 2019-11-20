<?php

Route::group(['middleware' => 'auth.admin'], function() {
    Route::group(['prefix' => 'categories', 'as' => 'application.categories.'], function() {
        Route::post('create', 'Api\CategoriesController@create')->name('create');
    });
});