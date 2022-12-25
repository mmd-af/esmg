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




Route::get('/contactus', function () { return view('home.sheets.contactus'); })->name('sheets.contactus');
Route::get('/pompsorangi', function () { return view('home.sheets.pompsorangi'); })->name('sheets.pompsorangi');
Route::get('/tighemosatahkonande', function () { return view('home.sheets.tighemosatahkonande'); })->name('sheets.tighemosatahkonande');
Route::get('/controldama', function () { return view('home.sheets.controldama'); })->name('sheets.controldama');
Route::get('/poosheshsathi', function () { return view('home.sheets.poosheshsathi'); })->name('sheets.poosheshsathi');
Route::get('/pizoelectric', function () { return view('home.sheets.pizoelectric'); })->name('sheets.pizoelectric');
Route::get('/hefazatrahdoor', function () { return view('home.sheets.hefazatrahdoor'); })->name('sheets.hefazatrahdoor');
Route::get('/mashinsooech', function () { return view('home.sheets.mashinsooech'); })->name('sheets.mashinsooech');
Route::get('/mabdal', function () { return view('home.sheets.mabdal'); })->name('sheets.mabdal');
Route::get('/taghsim', function () { return view('home.sheets.taghsim'); })->name('sheets.taghsim');
Route::get('/ayarsanj', function () { return view('home.sheets.ayarsanj'); })->name('sheets.ayarsanj');
