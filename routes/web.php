<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth', 'super.admin']], function () {
    Lfm::routes();
});


