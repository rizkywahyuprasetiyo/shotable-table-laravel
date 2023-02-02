<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::controller(MahasiswaController::class)->name('mahasiswa.')->group(function () {
    Route::get('/mahasiswa', 'index')->name('index');
    Route::get('/mahasiswa/tambah', 'tambah')->name('tambah');
    Route::post('/mahasiswa/simpan', 'simpan')->name('simpan');
});
