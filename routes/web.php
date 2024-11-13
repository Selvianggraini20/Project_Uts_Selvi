<?php
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanController;

Route::resource('absensi', AbsensiController::class);
Route::resource('karyawan', KaryawanController::class);
Route::post('karyawan/store', [AbsensiController::class, 'store'])->name('karyawan.store');


// Menampilkan daftar absensi dan karyawan pada halaman utama
Route::get('/', function () {
    return view('welcome');
});
