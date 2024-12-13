<?php

namespace App\Http\Controllers\Siswa;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DataDiriController extends Controller
{
    public function index()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('pages.siswa.data-diri', compact('data'));
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $item = User::findOrFail(Auth::user()->id);

        $item->update($data);

        return redirect()->route('data-diri');
    }
}
