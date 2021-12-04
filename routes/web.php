<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JenisPelanggaranController;
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

       Route::prefix('kelas')->name('kelas.')->group(function () {
           Route::get('/', [KelasController::class, 'index'])->name('index');
           Route::post('/', [KelasController::class, 'store'])->name('store');
           Route::get('create', [KelasController::class, 'create'])->name('create');
           Route::get('{kelas}', [KelasController::class, 'edit'])->name('edit');
           Route::put('{kelas}', [KelasController::class, 'update'])->name('update');
           Route::delete('{kelas}', [KelasController::class, 'destroy'])->name('destroy');
       });
       Route::resource('jenis-pelanggaran', JenisPelanggaranController::class);
       Route::resource('akun', AkunController::class);
    });
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
