<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InterviewSession;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class SesiWawancaraController extends Controller
{
    public function destroy(string $id)
    {
        $item = InterviewSession::where('users_id', $id)->first();

        $item->delete();

        //redirect to index
        return back();
    }
}
