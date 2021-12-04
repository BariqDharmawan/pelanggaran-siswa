<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', 'sekolah/dashboard');

Route::middleware('auth')->group(function () {
    Route::get('siswa/data', [SiswaController::class, 'manage'])->name('siswa.data');
    Route::resource('siswa', SiswaController::class);

    Route::prefix('sekolah')->name('sekolah.')->middleware('auth')->group(function () {
       Route::get('dashboard', DashboardController::class)->name('dashboard');
       Route::resource('jurusan', JurusanController::class);
       Route::resource('kelas', KelasController::class)->except('show', 'edit', 'update');
       Route::get('kelas/{kelas}', [KelasController::class, 'edit'])->name('kelas.edit');
       Route::put('kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
       Route::resource('pelanggaran', PelanggaranController::class);
       Route::resource('akun', AkunController::class);
    });
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
