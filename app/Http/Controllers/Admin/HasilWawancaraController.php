<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InterviewResult;
use Barryvdh\DomPDF\Facade\Pdf;

class HasilWawancaraController extends Controller
{
    public function index()
    {
        $results = InterviewResult::with('user')->get();
        return view('pages.admin.jadwal-wawancara.hasil', compact('results'));
    }
    public function cetak()
    {
        $results = InterviewResult::with('user')->get();
        $pdf = PDF::loadView('pages.admin.jadwal-wawancara.cetak-hasil', [
            'results' => $results,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
