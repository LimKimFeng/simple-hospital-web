<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Define routes for PasienController without using resource
Route::get('pasiens', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('pasiens/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('pasiens', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('pasiens/{id}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('pasiens/{id}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('pasiens/{id}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
