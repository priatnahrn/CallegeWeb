<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', [LowonganController::class, 'showLandingPage'])->name('lowongans.landingpage');

Route::get('/tambahlowongan', function () {
    return view('tambahlowongan');
})->name('tambahlowongan');


Route::get('/lowongan/{id}', [LowonganController::class, 'index'])->name('lowongans.index');

Route::post('/tambahlowongan', [LowonganController::class, 'store'])->name('tambahlowongan.store');
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongans.index');
Route::get('/lowongan/{id}', [LowonganController::class, 'show'])->name('lowongans.show');


