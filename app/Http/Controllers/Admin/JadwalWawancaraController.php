<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\InterviewSession;
use App\Models\InterviewSchedule;
use App\Http\Controllers\Controller;
use App\Models\InterviewResult;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalWawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = InterviewSchedule::withCount('user')->get();
        return view('pages.admin.jadwal-wawancara.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.jadwal-wawancara.create');
    }

    public function addSiswa($id)
    {
        $data = InterviewSchedule::findOrFail($id);
        // Ambil ID siswa yang sudah memiliki jadwal wawancara
        $scheduledStudentIds = InterviewSession::pluck('users_id');
        $users = User::where('role', 'siswa') // Filter berdasarkan role siswa
            ->where('status_pendaftaran', 'Selesai') // Filter berdasarkan status pendaftaran
            ->whereNotIn('id', $scheduledStudentIds) // Kecualikan siswa yang sudah dijadwalkan
            ->get();
        return view('pages.admin.jadwal-wawancara.add-siswa', [
            'data' => $data,
            'users' => $users
        ]);
    }

    public function scheduleInterviews(Request $request)
    {
        $studentIds = $request->input('user_ids');
        $interviewSchedulesId = $request->input('interview_schedules_id');

        if (!$studentIds || count($studentIds) == 0) {
            return response()->json(['message' => 'Tidak ada siswa yang dipilih!'], 400);
        }

        foreach ($studentIds as $studentId) {
            InterviewSession::create([
                'users_id' => $studentId,
                'interview_schedules_id' => $interviewSchedulesId,
            ]);
        }

        return response()->json(['message' => 'Jadwal wawancara berhasil dibuat!']);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'tanggal'         => 'required|date',
            'waktu_mulai'   => 'required|string',
            'waktu_akhir'   => 'required|string',
        ]);

        //create product
        InterviewSchedule::create([
            'tanggal'         => $request->tanggal,
            'waktu_mulai'   => $request->waktu_mulai,
            'waktu_akhir'   => $request->waktu_akhir,
        ]);

        //redirect to index
        return redirect()->route('wawancara.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = InterviewSchedule::findOrFail($id);
        $users = User::whereHas('interviewSession', function ($query) use ($id) {
            $query->where('interview_schedules_id', $id);
        })->get();
        return view('pages.admin.jadwal-wawancara.detail', [
            'data' => $data,
            'users' => $users
        ]);
    }

    public function addResult(Request $request)
    {
        //create product
        InterviewResult::create([
            'users_id'         => $request->users_id,
            'tanggal_wawancara'   => $request->tanggal_wawancara,
            'hasil_wawancara'   => $request->hasil_wawancara
        ]);

        InterviewSession::where('users_id', $request->users_id)->delete();

        //redirect to index
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function cetak($id)
    {
        $data = InterviewSchedule::findOrFail($id);
        $users = User::whereHas('interviewSession', function ($query) use ($id) {
            $query->where('interview_schedules_id', $id);
        })->get();
        $pdf = PDF::loadView('pages.admin.jadwal-wawancara.cetak', [
            'users' => $users,
            'data' => $data,
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = InterviewSchedule::findOrFail($id);
        return view('pages.admin.jadwal-wawancara.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $item = InterviewSchedule::findOrFail($id);

        //update product without image
        $item->update([
            'tanggal'         => $request->tanggal,
            'waktu_mulai'   => $request->waktu_mulai,
            'waktu_akhir'   => $request->waktu_akhir,
        ]);

        //redirect to index
        return redirect()->route('wawancara.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = InterviewSchedule::findOrFail($id);

        $item->delete();

        //redirect to index
        return redirect()->route('wawancara.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
