<?php


use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectImageController;
use Illuminate\Support\Facades\Route;





Route::prefix('adminindex')->middleware(['auth','AdminTeach'])->group(function(){

    Route::resource('projects', ProjectController::class);



    Route::delete('/projects/{project}/images-destroy' ,[ProjectImageController::class , 'destroy'])->name('projects.images.destroy');
    Route::put('/projects/{project}/images-set-primary' ,[ProjectImageController::class , 'setPrimary'])->name('projects.images.set_primary');
    Route::post('/projects/{project}/images-add' ,[ProjectImageController::class , 'add'])->name('projects.images.add');
    Route::post('/projects/{project}/images-logo' ,[ProjectImageController::class , 'logo'])->name('projects.images.logo');
    Route::post('/projects/{project}/images-customer' ,[ProjectImageController::class , 'customer'])->name('projects.images.customer');


    });
