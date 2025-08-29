<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PortofolioController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/portofolio/{id}', [PortofolioController::class, 'show'])->name('portofolio.detail');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'submitKontak'])->name('kontak.submit');
