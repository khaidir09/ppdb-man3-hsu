<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InterviewSession;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function destroy(string $id)
    {
        $item = Student::where('users_id', $id)->first();

        $item->delete();

        //redirect to index
        return back();
    }
}
