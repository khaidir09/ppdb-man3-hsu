<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanPerbaikanController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Siswa')->where('status_pendaftaran', 'Perlu Perbaikan')->get();
        return view('pages.admin.laporan.perbaikan', compact('users'));
    }

    public function cetak()
    {
        $users = User::where('role', 'Siswa')->where('status_pendaftaran', 'Perlu Perbaikan')->get();
        $pdf = PDF::loadView('pages.admin.laporan.perbaikan-cetak', [
            'users' => $users,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
