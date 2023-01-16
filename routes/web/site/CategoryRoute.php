<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Category'], function () {
    Route::group(['prefix' => 'site', 'as' => 'site.'], function () {
        Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
            Route::get('/{category:slug}', [
                'as' => 'show',
                'uses' => 'CategoryController@show'
            ]);
        });
        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'categories-ajax', 'as' => 'categories.ajax.'], function () {
            Route::get('/getCategory', [
                'as' => 'getCategory',
                'uses' => 'CategoryAjaxController@getCategory'
            ]);
        });
    });
});
