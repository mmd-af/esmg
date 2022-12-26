<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;

Route::get('/', [ProjectController::class, 'show'])->name('homepage');
// Route::get('/', function () {
//     return view('home.index');
// })->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/adminindex', function () {
    return view('admin.adminindex');
})->middleware(['auth','AdminTeach'])->name('admin.adminindex');

require __DIR__.'/auth.php';
require __DIR__.'/projects.php';




Route::get('/contactus', function () { return view('site.sheets.contactus'); })->name('sheets.contactus');
Route::get('/pompsorangi', function () { return view('site.sheets.pompsorangi'); })->name('sheets.pompsorangi');
Route::get('/tighemosatahkonande', function () { return view('site.sheets.tighemosatahkonande'); })->name('sheets.tighemosatahkonande');
Route::get('/controldama', function () { return view('site.sheets.controldama'); })->name('sheets.controldama');
Route::get('/poosheshsathi', function () { return view('site.sheets.poosheshsathi'); })->name('sheets.poosheshsathi');
Route::get('/pizoelectric', function () { return view('site.sheets.pizoelectric'); })->name('sheets.pizoelectric');
Route::get('/hefazatrahdoor', function () { return view('site.sheets.hefazatrahdoor'); })->name('sheets.hefazatrahdoor');
Route::get('/mashinsooech', function () { return view('site.sheets.mashinsooech'); })->name('sheets.mashinsooech');
Route::get('/mabdal', function () { return view('site.sheets.mabdal'); })->name('sheets.mabdal');
Route::get('/taghsim', function () { return view('site.sheets.taghsim'); })->name('sheets.taghsim');
Route::get('/ayarsanj', function () { return view('site.sheets.ayarsanj'); })->name('sheets.ayarsanj');
