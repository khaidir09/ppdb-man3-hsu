<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flow;
use Illuminate\Http\Request;

class AlurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flows = Flow::all();
        return view('pages.admin.alur.index', compact('flows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.alur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'nama_alur'         => 'required',
            'deskripsi_alur'   => 'required',
            'ikon_alur'   => 'required',
        ]);

        //create product
        Flow::create([
            'nama_alur'         => $request->nama_alur,
            'deskripsi_alur'   => $request->deskripsi_alur,
            'ikon_alur'   => $request->ikon_alur
        ]);

        //redirect to index
        return redirect()->route('alur.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $item = Flow::findOrFail($id);
        return view('pages.admin.alur.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $item = Flow::findOrFail($id);

        //update product without image
        $item->update([
            'nama_alur'         => $request->nama_alur,
            'deskripsi_alur'   => $request->deskripsi_alur,
            'ikon_alur'   => $request->ikon_alur
        ]);

        //redirect to index
        return redirect()->route('alur.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Flow::findOrFail($id);

        $item->delete();

        //redirect to index
        return redirect()->route('alur.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
