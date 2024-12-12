<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AlurController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PersyaratanController;
use App\Http\Controllers\Admin\ProfilMadrasahController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Email Verification Notice
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resend Verification Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/master/profil-madrasah', [ProfilMadrasahController::class, 'index'])->name('profil-madrasah');
    Route::post('/master/profil-madrasah/{id}', [ProfilMadrasahController::class, 'update'])->name('profil-madrasah-update');
    Route::resource('master/alur', AlurController::class);
    Route::resource('master/jadwal', JadwalController::class);
    Route::resource('master/persyaratan', PersyaratanController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
