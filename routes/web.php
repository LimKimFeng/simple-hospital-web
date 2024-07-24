<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index']);
Route::get('home', [WelcomeController::class, 'index'])->name('home');

// for PasienController
Route::get('pasiens', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('pasiens/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('pasiens', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('pasiens/{id}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('pasiens/{id}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('pasiens/{id}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

// for DokterController
Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('dokter/create', [DokterController::class, 'create'])->name('dokter.create');
Route::post('dokter', [DokterController::class, 'store'])->name('dokter.store');
Route::get('dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
Route::put('dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::delete('dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');

// for KunjunganController
Route::get('kunjungan', [KunjunganController::class, 'index'])->name('kunjungan.index');
Route::get('kunjungan/create', [KunjunganController::class, 'create'])->name('kunjungan.create');
Route::post('kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');
Route::get('kunjungan/{id}/edit', [KunjunganController::class, 'edit'])->name('kunjungan.edit');
Route::put('kunjungan/{id}', [KunjunganController::class, 'update'])->name('kunjungan.update');
Route::delete('kunjungan/{id}', [KunjunganController::class, 'destroy'])->name('kunjungan.destroy');