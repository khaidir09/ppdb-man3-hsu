<?php

namespace App\Http\Controllers\Siswa;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class DataBerkasController extends Controller
{
    public function index()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('pages.siswa.data-berkas', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Temukan data user berdasarkan ID
        $user = User::findOrFail($id);

        // Validasi input
        $request->validate([
            'rapor' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // 5MB
            'ijazah' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // 5MB
            'kartu_keluarga' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // 5MB
            'akta' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // 5MB
            'kip' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // 5MB
        ]);

        $dataToUpdate = [];
        $manager = new ImageManager(new Driver());

        $files = ['rapor', 'ijazah', 'kartu_keluarga', 'akta', 'kip'];
        foreach ($files as $file) {
            if ($request->hasFile($file)) {
                $fileName = hexdec(uniqid()) . '.' . $request->file($file)->getClientOriginalExtension();

                // Resize image menggunakan Intervention Image
                $img = $manager->read($request->file($file));
                $img->resize(640, 960, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $filePath = 'upload/berkas/' . $fileName;
                $img->save(public_path($filePath), 80); // Simpan dengan kualitas 80%

                $dataToUpdate[$file] = $filePath;
            }
        }

        $user->update($dataToUpdate);

        return redirect()->route('data-berkas');
    }
}
