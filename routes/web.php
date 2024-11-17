<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AsistenDosenController;
use App\Http\Controllers\WelcomeController;  // Pastikan controller untuk welcome ada

// Halaman Utama (Landing Page)
Route::get('/', [WelcomeController::class, 'index']);  // Panggil controller WelcomeController

// Route untuk Jadwal Praktikum
Route::resource('jadwal', JadwalController::class);

// Route untuk Kelas
Route::resource('kelas', KelasController::class);

// Route untuk Asisten Dosen
Route::resource('asisten_dosen', AsistenDosenController::class);
// Route::get('/asisten-dosen/create', [AsistenDosenController::class, 'create'])->name('asisten-dosen.create');
