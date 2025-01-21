<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AlurController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataSiswaController;
use App\Http\Controllers\Admin\JadwalWawancaraController;
use App\Http\Controllers\Admin\LaporanBelumLengkapController;
use App\Http\Controllers\Admin\LaporanBelumVerifikasiController;
use App\Http\Controllers\Admin\LaporanBerkasController;
use App\Http\Controllers\Admin\LaporanKeseluruhanController;
use App\Http\Controllers\Admin\LaporanOrangTuaController;
use App\Http\Controllers\Admin\LaporanPerbaikanController;
use App\Http\Controllers\Admin\LaporanSelesaiController;
use App\Http\Controllers\Admin\PersyaratanController;
use App\Http\Controllers\Admin\ProfilMadrasahController;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboardController;
use App\Http\Controllers\Siswa\DataAsalSekolahController;
use App\Http\Controllers\Siswa\DataBerkasController;
use App\Http\Controllers\Siswa\DataDiriController;
use App\Http\Controllers\Siswa\DataOrangTuaController;
use App\Http\Controllers\Siswa\LoginController;
use App\Http\Middleware\EnsureRole;
use App\Http\Middleware\EnsureRoleSiswa;
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

Route::get('/calon/login', [LoginController::class, 'showLoginForm'])->name('calon.login');
Route::post('/calon/login', [LoginController::class, 'login']);


Route::prefix('admin')->middleware(['auth', 'verified', EnsureRole::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/master/profil-madrasah', [ProfilMadrasahController::class, 'index'])->name('profil-madrasah');
    Route::post('/master/profil-madrasah/{id}', [ProfilMadrasahController::class, 'update'])->name('profil-madrasah-update');
    Route::resource('master/alur', AlurController::class);
    Route::resource('master/jadwal', JadwalController::class);
    Route::resource('master/persyaratan', PersyaratanController::class);
    Route::resource('master/wawancara', JadwalWawancaraController::class);
    Route::get('/master/wawancara-siswa/{id}', [JadwalWawancaraController::class, 'addSiswa'])->name('wawancara-siswa');
    Route::post('/master/wawancara-siswa', [JadwalWawancaraController::class, 'scheduleInterviews'])->name('simpan-wawancara-siswa');
    Route::resource('siswa', DataSiswaController::class);
    Route::get('/laporan/keseluruhan-data-pendaftar', [LaporanKeseluruhanController::class, 'index'])->name('keseluruhan-data-pendaftar');
    Route::get('/laporan/cetak-keseluruhan-data-pendaftar', [LaporanKeseluruhanController::class, 'cetak'])->name('keseluruhan-data-pendaftar-cetak');
    Route::get('/laporan/belum-verifikasi', [LaporanBelumVerifikasiController::class, 'index'])->name('belum-verifikasi');
    Route::get('/laporan/cetak-belum-verifikasi', [LaporanBelumVerifikasiController::class, 'cetak'])->name('belum-verifikasi-cetak');
    Route::get('/laporan/belum-lengkap', [LaporanBelumLengkapController::class, 'index'])->name('belum-lengkap');
    Route::get('/laporan/cetak-belum-lengkap', [LaporanBelumLengkapController::class, 'cetak'])->name('belum-lengkap-cetak');
    Route::get('/laporan/selesai', [LaporanSelesaiController::class, 'index'])->name('selesai');
    Route::get('/laporan/cetak-selesai', [LaporanSelesaiController::class, 'cetak'])->name('selesai-cetak');
    Route::get('/laporan/perbaikan', [LaporanPerbaikanController::class, 'index'])->name('perbaikan');
    Route::get('/laporan/cetak-perbaikan', [LaporanPerbaikanController::class, 'cetak'])->name('perbaikan-cetak');
    Route::get('/laporan/orang-tua', [LaporanOrangTuaController::class, 'index'])->name('orang-tua');
    Route::get('/laporan/cetak-orang-tua', [LaporanOrangTuaController::class, 'cetak'])->name('orang-tua-cetak');
    Route::get('/laporan/berkas', [LaporanBerkasController::class, 'index'])->name('berkas');
    Route::get('/laporan/cetak-berkas', [LaporanBerkasController::class, 'cetak'])->name('berkas-cetak');
});

Route::prefix('siswa')->middleware(['auth', 'verified', EnsureRoleSiswa::class])->group(function () {
    Route::get('/dashboard', [SiswaDashboardController::class, 'index'])->name('dashboard-siswa');
    Route::get('/data-diri', [DataDiriController::class, 'index'])->name('data-diri');
    Route::post('/data-diri/{id}', [DataDiriController::class, 'update'])->name('data-diri-update');
    Route::get('/data-asal-sekolah', [DataAsalSekolahController::class, 'index'])->name('data-asal-sekolah');
    Route::post('/data-asal-sekolah/{id}', [DataAsalSekolahController::class, 'update'])->name('data-asal-sekolah-update');
    Route::get('/data-orang-tua', [DataOrangTuaController::class, 'index'])->name('data-orang-tua');
    Route::post('/data-orang-tua/{id}', [DataOrangTuaController::class, 'update'])->name('data-orang-tua-update');
    Route::get('/data-berkas', [DataBerkasController::class, 'index'])->name('data-berkas');
    Route::post('/data-berkas/{id}', [DataBerkasController::class, 'update'])->name('data-berkas-update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
