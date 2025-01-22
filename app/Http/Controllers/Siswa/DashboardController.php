<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Profile;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $namaSekolah = Profile::where('id', 1)->value('nama_sekolah');
        $jadwal = Schedule::all();
        $pendaftaranOnline1 = Schedule::where('id', 1)->value('tgl_mulai');
        $pendaftaranOnline2 = Schedule::where('id', 1)->value('tgl_selesai_gelombang2');
        $user = Auth::user();

        // Ambil informasi jadwal wawancara jika ada
        $interviewSession = $user->interviewSession;

        // Jika siswa memiliki jadwal wawancara
        $schedule = $interviewSession ? $interviewSession->schedule : null;
        return view('pages.siswa.dashboard', compact('namaSekolah', 'jadwal', 'pendaftaranOnline1', 'pendaftaranOnline2', 'user', 'schedule'));
    }
}
