<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth', 'super.admin']], function () {
    Lfm::routes();
});

Route::get('/migrate', function () {
    \Artisan::call('migrate');
    return \Artisan::output();
})->middleware(['web', 'auth', 'super.admin']);

Route::get('/optimize', function () {
    \Artisan::call('optimize');
    return \Artisan::output();
})->middleware(['web', 'auth', 'super.admin']);
