<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PendidikanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/jabatan', [JabatanController::class, 'index']);

Route::get('/pendidikan', [PendidikanController::class, 'index']);