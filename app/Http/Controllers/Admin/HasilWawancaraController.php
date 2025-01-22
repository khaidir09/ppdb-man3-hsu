<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\InterviewSession;
use App\Http\Controllers\Controller;
use App\Models\InterviewResult;

class HasilWawancaraController extends Controller
{
    public function index()
    {
        $results = InterviewResult::with('user')->get();
        return view('pages.admin.jadwal-wawancara.hasil', compact('results'));
    }
}
