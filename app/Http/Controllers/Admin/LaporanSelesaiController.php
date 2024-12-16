<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanSelesaiController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Siswa')->where('status_pendaftaran', 'Selesai')->get();
        return view('pages.admin.laporan.selesai', compact('users'));
    }

    public function cetak()
    {
        $users = User::where('role', 'Siswa')->where('status_pendaftaran', 'Selesai')->get();
        $pdf = PDF::loadView('pages.admin.laporan.selesai-cetak', [
            'users' => $users,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
