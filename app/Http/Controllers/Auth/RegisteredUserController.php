<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nisn' => ['required', 'numeric', 'digits:10'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tgl_lahir' => ['required', 'date'],
            'nomor_hp' => ['required', 'numeric'],
            'nomor_wa' => ['required', 'numeric'],
            'anak_ke' => ['numeric', 'nullable'],
            'hubungan_dalam_keluarga' => ['required', 'string', 'max:255'],
            'jumlah_saudara_kandung' => ['numeric', 'nullable'],
            'alamat' => ['required'],
            'nama_sekolah_asal' => ['required', 'string', 'max:255'],
            'pilihan_mendaftar' => ['string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'nomor_hp' => $request->nomor_hp,
            'nomor_wa' => $request->nomor_wa,
            'hobi' => $request->hobi,
            'cita_cita' => $request->cita_cita,
            'anak_ke' => $request->anak_ke,
            'hubungan_dalam_keluarga' => $request->hubungan_dalam_keluarga,
            'jumlah_saudara_kandung' => $request->jumlah_saudara_kandung,
            'alamat' => $request->alamat,
            'nama_sekolah_asal' => $request->nama_sekolah_asal,
            'alamat_sekolah_asal' => $request->alamat_sekolah_asal,
            'alamat' => $request->alamat,
            'status_pendaftaran' => 'Belum Verifikasi',
            'pilihan_mendaftar' => $request->pilihan_mendaftar,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
