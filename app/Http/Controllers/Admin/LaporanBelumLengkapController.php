<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanBelumLengkapController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Siswa')->whereNotNull('email_verified_at')->where(function ($query) {
            // Salah satu field berikut tidak boleh null
            $query->whereNull('nama_ayah')
                ->orWhereNull('nomor_hp_ayah')
                ->orWhereNull('nama_ibu')
                ->orWhereNull('nomor_hp_ibu');
        })->get();
        return view('pages.admin.laporan.belum-lengkap', compact('users'));
    }

    public function cetak()
    {
        $users = User::where('role', 'Siswa')->whereNotNull('email_verified_at')->where(function ($query) {
            // Salah satu field berikut tidak boleh null
            $query->whereNull('nama_ayah')
                ->orWhereNull('nomor_hp_ayah')
                ->orWhereNull('nama_ibu')
                ->orWhereNull('nomor_hp_ibu');
        })->get();
        $pdf = PDF::loadView('pages.admin.laporan.belum-lengkap-cetak', [
            'users' => $users,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
