<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanKeseluruhanController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Siswa')->get();
        return view('pages.admin.laporan.keseluruhan-pendaftar', compact('users'));
    }

    public function cetak()
    {
        $users = User::where('role', 'Siswa')->get();
        $pdf = PDF::loadView('pages.admin.laporan.keseluruhan-pendaftar-cetak', [
            'users' => $users,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
