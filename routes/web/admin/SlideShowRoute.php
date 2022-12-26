<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth', 'AdminTeach'], 'namespace' => 'App\Http\Controllers\Admin\SlideShow'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'slideshows', 'as' => 'slideshows.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'SlideShowController@index'
            ]);
            Route::get('/create', [
                'as' => 'create',
                'uses' => 'SlideShowController@create'
            ]);
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'SlideShowController@store'
            ]);
            Route::get('/{slideshow}/edit', [
                'as' => 'edit',
                'uses' => 'SlideShowController@edit'
            ]);
            Route::put('/{slideshow}/update', [
                'as' => 'update',
                'uses' => 'SlideShowController@update'
            ]);
            Route::delete('/{slideshow}/destroy', [
                'as' => 'destroy',
                'uses' => 'SlideShowController@destroy'
            ]);
        });
    });
});
