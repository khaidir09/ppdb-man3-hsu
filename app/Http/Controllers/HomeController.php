<?php

namespace App\Http\Controllers;

use App\Models\Flow;
use App\Models\Profile;
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
        return view('pages.home', compact('namaSekolah', 'tahunPelajaran', 'alur'));
    }
}
