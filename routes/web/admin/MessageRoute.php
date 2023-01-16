<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth', 'AdminTeach'], 'namespace' => 'App\Http\Controllers\Admin\Message'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'messages-ajax', 'as' => 'messages.ajax.'], function () {
            Route::get('/getMessage', [
                'as' => 'getMessage',
                'uses' => 'MessageAjaxController@getMessage'
            ]);
            Route::get('/checkMessage', [
                'as' => 'checkMessage',
                'uses' => 'MessageAjaxController@checkMessage'
            ]);
            Route::post('/markMessage', [
                'as' => 'markMessage',
                'uses' => 'MessageAjaxController@markMessage'
            ]);
        });
    });
});


