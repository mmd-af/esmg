<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Message'], function () {
    Route::group(['prefix' => 'site', 'as' => 'site.'], function () {
        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'messages-ajax', 'as' => 'messages.ajax.'], function () {
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'MessageAjaxController@store'
            ]);
        });
    });
});
