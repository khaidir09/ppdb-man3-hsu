<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanBelumVerifikasiController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Siswa')->where('email_verified_at', '=', null)->get();
        return view('pages.admin.laporan.belum-verifikasi', compact('users'));
    }

    public function cetak()
    {
        $users = User::where('role', 'Siswa')->where('email_verified_at', '=', null)->get();
        $pdf = PDF::loadView('pages.admin.laporan.belum-verifikasi-cetak', [
            'users' => $users,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
