<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::match(['get', 'post'], '/insert', [MahasiswaController::class, 'insert']);
Route::match(['get', 'post'], '/mahasiswa/update/{nim}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'delete']);