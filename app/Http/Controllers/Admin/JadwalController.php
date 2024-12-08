<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flow;
use App\Models\Schedule;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('pages.admin.jadwal.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flows = Flow::all();
        return view('pages.admin.jadwal.create', compact('flows'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'flows_id'         => 'required|integer',
            'tgl_mulai'   => 'required|date',
            'tgl_selesai'   => 'date|nullable',
            'tgl_mulai_gelombang2'   => 'required|date',
            'tgl_selesai_gelombang2'   => 'date|nullable',
        ]);

        //create product
        Schedule::create([
            'flows_id'         => $request->flows_id,
            'tgl_mulai'   => $request->tgl_mulai,
            'tgl_selesai'   => $request->tgl_selesai,
            'tgl_mulai_gelombang2'   => $request->tgl_mulai_gelombang2,
            'tgl_selesai_gelombang2'   => $request->tgl_selesai_gelombang2
        ]);

        //redirect to index
        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $item = Schedule::findOrFail($id);
        $flows = Flow::all();
        return view('pages.admin.jadwal.edit', [
            'item' => $item,
            'flows' => $flows
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $item = Schedule::findOrFail($id);

        //update product without image
        $item->update([
            'flows_id'         => $request->flows_id,
            'tgl_mulai'   => $request->tgl_mulai,
            'tgl_selesai'   => $request->tgl_selesai,
            'tgl_mulai_gelombang2'   => $request->tgl_mulai_gelombang2,
            'tgl_selesai_gelombang2'   => $request->tgl_selesai_gelombang2
        ]);

        //redirect to index
        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Schedule::findOrFail($id);

        $item->delete();

        //redirect to index
        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
