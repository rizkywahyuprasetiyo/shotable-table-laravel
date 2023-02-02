<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::controller(MahasiswaController::class)->name('mahasiswa.')->group(function () {
    Route::get('/mahasiswa', 'index')->name('index');
    Route::get('/mahasiswa/tambah', 'tambah')->name('tambah');
    Route::post('/mahasiswa/simpan', 'simpan')->name('simpan');
    Route::get('/mahasiswa/{mahasiswa}/edit', 'edit')->name('edit');
    Route::patch('/mahasiswa/{mahasiswa}/update', 'update')->name('update');
    Route::delete('/mahasiswa/{mahasiswa}/hapus', 'hapus')->name('hapus');
});
