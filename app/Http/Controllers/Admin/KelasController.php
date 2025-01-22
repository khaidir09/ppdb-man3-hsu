<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\InterviewResult;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::withCount('student')->get();
        return view('pages.admin.kelas.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Classroom::create([
            'name'   => $request->name
        ]);

        //redirect to index
        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function masukkanSiswa($id)
    {
        $data = Classroom::findOrFail($id);

        $users = User::where('role', 'siswa')->whereHas('interviewResult', function ($query) {
            $query->where('hasil_wawancara', 'Diterima');
        })->whereDoesntHave('student')->get();

        return view('pages.admin.kelas.add-siswa', [
            'data' => $data,
            'users' => $users
        ]);
    }

    public function classroomStudents(Request $request)
    {
        $studentIds = $request->input('user_ids');
        $classroomsId = $request->input('classrooms_id');

        if (!$studentIds || count($studentIds) == 0) {
            return response()->json(['message' => 'Tidak ada siswa yang dipilih!'], 400);
        }

        foreach ($studentIds as $studentId) {
            Student::create([
                'users_id' => $studentId,
                'classrooms_id' => $classroomsId,
            ]);
        }

        return response()->json(['message' => 'Siswa berhasil dimasukkan ke kelas!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Classroom::findOrFail($id);
        $students = Student::whereHas('classroom', function ($query) use ($id) {
            $query->where('classrooms_id', $id);
        })->get();
        return view('pages.admin.kelas.detail', [
            'data' => $data,
            'students' => $students
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Classroom::findOrFail($id);
        return view('pages.admin.kelas.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $item = Classroom::findOrFail($id);

        $item->update($data);

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Classroom::findOrFail($id);

        $item->delete();

        //redirect to index
        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
