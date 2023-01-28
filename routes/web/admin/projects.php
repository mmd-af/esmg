<?php


use App\Http\Controllers\Admin\Project\ProjectController;
use App\Http\Controllers\Admin\ProjectImageController;
use Illuminate\Support\Facades\Route;


Route::prefix('adminindex')->middleware(['auth', 'super.admin'])->group(function () {

    Route::resource('projects', ProjectController::class);

    Route::delete('/projects/{project}/images-destroy', [ProjectImageController::class, 'destroy'])->name('projects.images.destroy');
    Route::put('/projects/{project}/images-set-primary', [ProjectImageController::class, 'setPrimary'])->name('projects.images.set_primary');
    Route::post('/projects/{project}/images-add', [ProjectImageController::class, 'add'])->name('projects.images.add');
    Route::post('/projects/{project}/images-logo', [ProjectImageController::class, 'logo'])->name('projects.images.logo');
    Route::post('/projects/{project}/images-customer', [ProjectImageController::class, 'customer'])->name('projects.images.customer');


});


Route::group(['middleware' => ['web', 'auth', 'super.admin'], 'namespace' => 'App\Http\Controllers\Admin\Project'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'projects-ajax', 'as' => 'projects.ajax.'], function () {
            Route::post('/setSelected', [
                'as' => 'setSelected',
                'uses' => 'ProjectController@setSelected'
            ]);
        });
    });
});
