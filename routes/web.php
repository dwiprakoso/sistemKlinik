<?php

use App\Models\Poli;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('home');
});
Route::get('/poli', function () {
    return view('poli');
});
Route::get('/pasien', function () {
    return view('pasien');
});
// Route::get('/login',[LoginController::class, 'index']);

// karena menggunakan route resource shingga untuk route yang dipanggil di action menggunakan route list
Route::resource('obat', ObatController::class);
Route::resource('poli', PoliController::class);
Route::resource('Pasien', PasienController::class);
Route::resource('dokter', DokterController::class);