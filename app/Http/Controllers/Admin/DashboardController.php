<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $namaSekolah = Profile::where('id', 1)->value('nama_sekolah');
        $terdaftar = User::where('role', 'Siswa')->count();
        $terverifikasi = User::where('role', 'Siswa')->where('email_verified_at', '!=', null)->count();
        $belumVerifikasi = User::where('role', 'Siswa')->where('email_verified_at', '=', null)->count();
        $selesai = User::where('status_pendaftaran', 'Selesai')->count();
        $salah = User::where('status_pendaftaran', 'Perlu Perbaikan')->count();
        $belumLengkap = User::where('role', 'Siswa')->where('nama_ayah', null)->orWhere('nama_ibu', null)->orWhere('nomor_hp_ayah', null)->orWhere('nomor_hp_ibu', null)->count();
        return view('pages.admin.dashboard', compact('namaSekolah', 'terdaftar', 'terverifikasi', 'belumVerifikasi', 'selesai', 'salah', 'belumLengkap'));
    }
}
