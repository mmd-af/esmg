<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Home'], function () {
    Route::get('/', [
        'as' => 'home.index',
        'uses' => 'HomeController@homeIndex'
    ]);
    Route::get('/aboutus', [
        'as' => 'aboutus',
        'uses' => 'HomeController@aboutus'
    ]);
});
