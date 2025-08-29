<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'submitKontak'])->name('kontak.submit');
