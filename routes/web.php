<?php

use App\Http\Controllers\Admin\AlurController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\ProfilMadrasahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/master/profil-madrasah', [ProfilMadrasahController::class, 'index'])->name('profil-madrasah');
    Route::post('/master/profil-madrasah/{id}', [ProfilMadrasahController::class, 'update'])->name('profil-madrasah-update');
    Route::resource('master/alur', AlurController::class);
    Route::resource('master/jadwal', JadwalController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
