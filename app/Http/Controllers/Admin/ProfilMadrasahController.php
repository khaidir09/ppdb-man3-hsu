<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilMadrasahController extends Controller
{
    public function index()
    {
        $profil = Profile::findOrFail(1);
        return view('pages.admin.profil-madrasah', compact('profil'));
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $item = Profile::findOrFail(1);

        $item->update($data);

        return redirect()->route('profil-madrasah');
    }
}
