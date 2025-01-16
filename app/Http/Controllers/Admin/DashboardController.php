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
        $belumLengkap = User::where('role', 'Siswa') // Filter berdasarkan role
            ->whereNotNull('email_verified_at') // Pastikan email sudah terverifikasi
            ->where(function ($query) {
                // Salah satu field berikut tidak boleh null
                $query->whereNull('nama_ayah')
                    ->orWhereNull('nomor_hp_ayah')
                    ->orWhereNull('nama_ibu')
                    ->orWhereNull('nomor_hp_ibu')
                    ->orWhereNull('rapor')
                    ->orWhereNull('ijazah')
                    ->orWhereNull('kartu_keluarga')
                    ->orWhereNull('akta')
                    ->orWhereNull('kip');
            })->count();
        return view('pages.admin.dashboard', compact('namaSekolah', 'terdaftar', 'terverifikasi', 'belumVerifikasi', 'selesai', 'salah', 'belumLengkap'));
    }
}
