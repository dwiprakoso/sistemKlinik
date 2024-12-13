<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;


Route::get('/', function () {
    return view('home');
});

// karena menggunakan route resource shingga untuk route yang dipanggil di action menggunakan route list
Route::resource('obat', ObatController::class);
Route::resource('poli', PoliController::class);
Route::resource('pasien', PasienController::class);
Route::resource('dokter', DokterController::class);