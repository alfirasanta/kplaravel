<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Auth::routes();
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('indexpelanggan', [PelangganController::class, 'index']);
//     Route::get('laporanpelanggan', [PelangganController::class, 'laporan']);
//     Route::get('layananpelanggan', [PelangganController::class, 'layanan']);
//     // Route::get('loginpelanggan', [PelangganController::class, 'login']);
//     Route::get('registerpelanggan', [PelangganController::class, 'register']);
//     Route::get('statuslaporan', [PelangganController::class, 'status']);
//     // Route::get('simpanlaporan', [PelangganController::class, 'status']);
//     Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

//     // Route::get('/indexpelanggan', function () {
//     //     return view('pelanggan/indexpel');
//     // });
// });



Route::get('indexpelanggan', [PelangganController::class, 'index']);
Route::get('laporanpelanggan', [PelangganController::class, 'laporan']);
Route::get('layananpelanggan', [PelangganController::class, 'layanan']);
// Route::get('loginpelanggan', [PelangganController::class, 'login']);
Route::get('registerpelanggan', [PelangganController::class, 'register']);
Route::get('statuslaporan', [PelangganController::class, 'status']);
// Route::get('simpanlaporan', [PelangganController::class, 'status']);
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
