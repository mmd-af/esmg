<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/contactus', function () {
    return view('site.sheets.contactus');
})->name('sheets.contactus');
Route::get('/pompsorangi', function () {
    return view('site.sheets.pompsorangi');
})->name('sheets.pompsorangi');
Route::get('/tighemosatahkonande', function () {
    return view('site.sheets.tighemosatahkonande');
})->name('sheets.tighemosatahkonande');
Route::get('/controldama', function () {
    return view('site.sheets.controldama');
})->name('sheets.controldama');
Route::get('/poosheshsathi', function () {
    return view('site.sheets.poosheshsathi');
})->name('sheets.poosheshsathi');
Route::get('/pizoelectric', function () {
    return view('site.sheets.pizoelectric');
})->name('sheets.pizoelectric');
Route::get('/hefazatrahdoor', function () {
    return view('site.sheets.hefazatrahdoor');
})->name('sheets.hefazatrahdoor');
Route::get('/mashinsooech', function () {
    return view('site.sheets.mashinsooech');
})->name('sheets.mashinsooech');
Route::get('/mabdal', function () {
    return view('site.sheets.mabdal');
})->name('sheets.mabdal');
Route::get('/taghsim', function () {
    return view('site.sheets.taghsim');
})->name('sheets.taghsim');
Route::get('/ayarsanj', function () {
    return view('site.sheets.ayarsanj');
})->name('sheets.ayarsanj');


Route::get('/query', function () {
    $models = \App\Models\Project::all();
    foreach ($models as $model) {
        $model->slug = Str::slug($model->project_name);
        $model->selected = 1;
        $model->save();
    }
    echo "query is finished";
});


