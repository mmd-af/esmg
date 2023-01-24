<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth', 'AdminTeach']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


