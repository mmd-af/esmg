<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Project'], function () {
    Route::group(['as' => 'site.'], function () {
        Route::group(['prefix' => 'project', 'as' => 'projects.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'ProjectController@index'
            ]);
            Route::get('/{project:slug}', [
                'as' => 'show',
                'uses' => 'ProjectController@show'
            ]);
        });
    });
});
