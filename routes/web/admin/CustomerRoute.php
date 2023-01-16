<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth', 'AdminTeach'], 'namespace' => 'App\Http\Controllers\Admin\Customer'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'customers', 'as' => 'customers.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'CustomerController@index'
            ]);
            Route::get('/create', [
                'as' => 'create',
                'uses' => 'CustomerController@create'
            ]);
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'CustomerController@store'
            ]);
            Route::get('/{customer}/edit', [
                'as' => 'edit',
                'uses' => 'CustomerController@edit'
            ]);
            Route::put('/{customer}/update', [
                'as' => 'update',
                'uses' => 'CustomerController@update'
            ]);
            Route::delete('/{customer}/destroy', [
                'as' => 'destroy',
                'uses' => 'CustomerController@destroy'
            ]);
        });
    });
});
