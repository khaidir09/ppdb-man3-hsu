<?php

namespace App\Http\Controllers;

use App\Models\Flow;
use App\Models\Profile;
use App\Models\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $namaSekolah = Profile::where('id', 1)->value('nama_sekolah');
        $tahunPelajaran = Profile::where('id', 1)->value('tahun_pelajaran');
        $alur = Flow::all();
        $jadwal = Schedule::all();
        $pendaftaranOnline1 = Schedule::where('id', 1)->value('tgl_mulai');
        $pendaftaranOnline2 = Schedule::where('id', 1)->value('tgl_selesai_gelombang2');
        return view('pages.home', compact('namaSekolah', 'tahunPelajaran', 'alur', 'jadwal', 'pendaftaranOnline1', 'pendaftaranOnline2'));
    }
}
