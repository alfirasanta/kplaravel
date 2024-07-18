<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminController;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Auth::routes();

//admin
Route::get('indexadmin', [AdminController::class, 'index']);
Route::get('layananadmin', [AdminController::class, 'layanan']);
Route::get('kategoriadmin', [AdminController::class, 'kategori']);
Route::get('laporanadmin', [AdminController::class, 'laporan']);
Route::get('listpelanggan', [AdminController::class, 'pelanggan']);

Route::get('tambahkategori', [AdminController::class, 'tambahkategori'])->name('tambahkategori');
Route::post('simpankategori', [AdminController::class, 'simpankategori'])->name('simpankategori');
Route::delete('hapuskategori/{id}', [AdminController::class, 'hapuskategori'])->name('hapuskategori');
Route::get('editkategori/{id}', [AdminController::class, 'editkategori'])->name('editkategori');
Route::post('updatekategori', [AdminController::class, 'updatekategori'])->name('updatekategori');

Route::get('tambahlayanan', [AdminController::class, 'tambahlayanan'])->name('tambahlayanan');
Route::post('simpanlayanan', [AdminController::class, 'simpanlayanan'])->name('simpanlayanan');
Route::delete('hapuslayanan/{id}', [AdminController::class, 'hapuslayanan'])->name('hapuslayanan');
Route::get('editlayanan/{id}', [AdminController::class, 'editlayanan'])->name('editlayanan');
Route::post('updatelayanan', [AdminController::class, 'updatelayanan'])->name('updatelayanan');

//pelanggan
Route::get('indexpelanggan', [PelangganController::class, 'index']);
Route::get('laporanpelanggan', [PelangganController::class, 'laporan']);
Route::get('layananpelanggan', [PelangganController::class, 'layanan']);
Route::get('registerpelanggan', [PelangganController::class, 'register']);

Route::get('statuslaporan', [PelangganController::class, 'status']);
Route::post('simpanlaporan', [PelangganController::class, 'simpanlaporan'])->name('simpanlaporan');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
