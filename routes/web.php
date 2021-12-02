<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('siswa/data', [SiswaController::class, 'manage'])->name('siswa.data');
Route::resource('siswa', SiswaController::class);

Route::prefix('sekolah')->name('sekolah.')->group(function () {
   Route::get('dashboard', DashboardController::class)->name('dashboard');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
