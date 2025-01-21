<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\InterviewSession;
use App\Models\InterviewSchedule;
use App\Http\Controllers\Controller;

class JadwalWawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = InterviewSchedule::all();
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
        $users = User::where('role', 'Siswa')->where('status_pendaftaran', 'Selesai')->get();
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
        //
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
