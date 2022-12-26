<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\SlideShow'], function () {
    Route::group(['prefix' => 'site', 'as' => 'site.'], function () {

        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'slideshows-ajax', 'as' => 'slideshows.ajax.'], function () {
            Route::get('/getData', [
                'as' => 'getData',
                'uses' => 'SlideShowAjaxController@getData'
            ]);
        });
    });
});
