<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Requirement;
use Illuminate\Http\Request;

class PersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requirements = Requirement::all();
        return view('pages.admin.persyaratan.index', compact('requirements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.persyaratan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'deskripsi_persyaratan'         => 'required',
            'jumlah'   => 'required',
        ]);

        //create product
        Requirement::create([
            'deskripsi_persyaratan'   => $request->deskripsi_persyaratan,
            'jumlah'   => $request->jumlah
        ]);

        //redirect to index
        return redirect()->route('persyaratan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $item = Requirement::findOrFail($id);
        return view('pages.admin.persyaratan.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $item = Requirement::findOrFail($id);

        //update product without image
        $item->update([
            'deskripsi_persyaratan'   => $request->deskripsi_persyaratan,
            'jumlah'   => $request->jumlah
        ]);

        //redirect to index
        return redirect()->route('persyaratan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Requirement::findOrFail($id);

        $item->delete();

        //redirect to index
        return redirect()->route('persyaratan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
