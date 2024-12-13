<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flow;
use App\Models\User;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 'Siswa')->get();
        return view('pages.admin.siswa.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.siswa.detail', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $item = User::findOrFail($id);

        //update product without image
        $item->update([
            'flows_id'         => $request->flows_id,
            'tgl_mulai'   => $request->tgl_mulai,
            'tgl_selesai'   => $request->tgl_selesai,
            'tgl_mulai_gelombang2'   => $request->tgl_mulai_gelombang2,
            'tgl_selesai_gelombang2'   => $request->tgl_selesai_gelombang2
        ]);

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrFail($id);

        $item->delete();

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
