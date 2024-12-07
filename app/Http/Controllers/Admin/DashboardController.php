<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $namaSekolah = Profile::where('id', 1)->value('nama_sekolah');
        return view('pages.admin.dashboard', compact('namaSekolah'));
    }
}
