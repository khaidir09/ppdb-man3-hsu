@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 text-center" id="sidebar-info">
            <img src="{{ asset('images/kemenag.png') }}" alt="" height="150" />
            <h2>
                PPDB MAN 3 HSU <br />
                2025/2026
            </h2>
            <!-- Jadwal -->
            <div class="info-jadwal">
                <h5>Jadwal Pendaftaran Online</h5>
                <p>Gelombang 1 (3 Maret 2025 s/d 28 Maret 2025)</p>
                <p>Gelombang 2 (21 April 2025 s/d 9 Mei 2025)</p>
            </div>
            <div class="alert alert-warning mb-0" role="alert">
                Pastikan email yang kamu daftarkan aktif untuk diverifikasi.
            </div>
            <!-- CTA -->
            <a href="" class="btn btn-grup-wa my-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                    <path
                        d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"
                    />
                </svg>
                Gabung Grup WA
            </a>
            <div>
                <p>Sudah punya akun PPDB ?</p>
                <a href="{{ route('login') }}" class="btn btn-login">Masuk Akun </a>
            </div>
        </div>
        <div class="col-lg-8" id="form-pendaftaran">
            <div class="container">
                <div class="alert alert-primary" role="alert">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="icon icon-tabler icons-tabler-filled icon-tabler-info-circle me-1"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z"
                        /></svg>Lengkapi isian formulir berikut
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST" class="mt-3">
                    @csrf
                    <h5 class="mb-2">Data Akun</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="email" class="form-label"
                                >Alamat Email <span class="text-danger">*</span></label
                            >
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="nama@gmail.com"
                            />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="password" class="form-label"
                                >Kata Sandi <span class="text-danger">*</span></label
                            >
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Minimal 8 karakter"
                                required autocomplete="new-password"
                            />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="password-confirm" class="form-label"
                                >Konfirmasi Kata Sandi <span class="text-danger">*</span></label
                            >
                            <input
                                type="password"
                                class="form-control"
                                id="password-confirm"
                                name="password_confirmation"
                                placeholder="Masukkan ulang kata sandi"
                                required autocomplete="new-password"
                            />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="mt-3 mb-2">Data Diri</h5>
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <label for="nisn" class="form-label"
                                >NISN <span class="text-danger">*</span></label
                            >
                            <input
                                name="nisn"
                                type="number"
                                class="form-control"
                                id="nisn"
                                placeholder="10 Digit"
                            />
                            @error('nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="name" class="form-label"
                                >Nama Siswa <span class="text-danger">*</span></label
                            >
                            <input
                                name="name"
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Sesuai dengan nama di Ijazah"
                            />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3" style="font-weight: 700">
                                Jenis Kelamin <span class="text-danger">*</span>
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="jenis_kelamin"
                                    id="jenis_kelamin"
                                    value="Laki-laki"
                                />
                                <label class="form-check-label" for="jenis_kelamin"
                                    >Laki-laki</label
                                >
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="jenis_kelamin"
                                    id="jenis_kelamin"
                                    value="Perempuan"
                                />
                                <label class="form-check-label" for="jenis_kelamin"
                                    >Perempuan</label
                                >
                            </div>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="tempat_lahir" class="form-label"
                                >Tempat Lahir <span class="text-danger">*</span></label
                            >
                            <input
                                name="tempat_lahir"
                                type="text"
                                class="form-control"
                                id="tempat_lahir"
                                placeholder="Sesuai dengan Ijazah"
                            />
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="tgl_lahir" class="form-label"
                                >Tanggal Lahir <span class="text-danger">*</span></label
                            >
                            <input
                                type="date"
                                class="form-control"
                                id="tgl_lahir"
                                name="tgl_lahir"
                                placeholder="Sesuai dengan Ijazah"
                            />
                            @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="nomor_hp" class="form-label"
                                >No. HP Aktif <span class="text-danger">*</span></label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="nomor_hp"
                                name="nomor_hp"
                                placeholder="08xxxxxxxxxx"
                            />
                            @error('nomor_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="nomor_wa" class="form-label"
                                >No. Whatsapp <span class="text-danger">*</span></label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="nomor_wa"
                                name="nomor_wa"
                                placeholder="08xxxxxxxxxx"
                            />
                            @error('nomor_wa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="hobi" class="form-label">Hobi</label>
                            <input
                                name="hobi"
                                type="text"
                                class="form-control"
                                id="hobi"
                                placeholder=""
                            />
                            @error('hobi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="cita_cita" class="form-label">Cita-cita</label>
                            <input
                                name="cita_cita"
                                type="text"
                                class="form-control"
                                id="cita_cita"
                                placeholder=""
                            />
                            @error('cita_cita')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="anak_ke" class="form-label"
                                >Siswa Anak ke Berapa</label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="anak_ke"
                                name="anak_ke"
                                placeholder=""
                            />
                            @error('anak_ke')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="hubungan_dalam_keluarga" class="form-label"
                                >Hubungan dalam keluarga</label
                            >
                            <select
                                name="hubungan_dalam_keluarga"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected value="Anak Kandung">Anak Kandung</option>
                                <option value="Anak Tiri">Anak Tiri</option>
                                <option value="Anak Angkat">Anak Angkat</option>
                            </select>
                            @error('hubungan_dalam_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="jumlah_saudara_kandung" class="form-label"
                                >Jumlah Saudara Kandung</label
                            >
                            <input
                                name="jumlah_saudara_kandung"
                                type="number"
                                class="form-control"
                                id="jumlah_saudara_kandung"
                                placeholder=""
                            />
                            @error('jumlah_saudara_kandung')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label mb-2"
                                >Alamat Orang Tua <span class="text-danger">*</span></label
                            >
                            <textarea
                                name="alamat"
                                class="form-control"
                                id="alamat"
                                rows="1"
                                required
                            ></textarea>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="mt-3 mb-2">Data Sekolah Asal</h5>
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <label for="nama_sekolah_asal" class="form-label"
                                >Nama Sekolah Asal <span class="text-danger">*</span></label
                            >
                            <input
                                name="nama_sekolah_asal"
                                type="text"
                                class="form-control"
                                id="nama_sekolah_asal"
                                placeholder=""
                            />
                            @error('nama_sekolah_asal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <label for="alamat_sekolah_asal" class="form-label mb-2"
                                >Alamat Sekolah Asal</label
                            >
                            <textarea
                                name="alamat_sekolah_asal"
                                class="form-control"
                                id="alamat_sekolah_asal"
                                rows="1"
                            ></textarea>
                            @error('alamat_sekolah_asal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-1" style="font-weight: 700">
                                Pilihan Mendaftar <span class="text-danger">*</span>
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="pilihan_mendaftar"
                                    id="pilihan_mendaftar"
                                    value="Pilihan Pertama"
                                />
                                <label class="form-check-label" for="pilihan_mendaftar"
                                    >Pilihan Pertama</label
                                >
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="pilihan_mendaftar"
                                    id="pilihan_mendaftar"
                                    value="Pilihan Kedua"
                                />
                                <label class="form-check-label" for="pilihan_mendaftar"
                                    >Pilihan Kedua</label
                                >
                            </div>
                            @error('pilihan_mendaftar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn tombol w-100 mt-3">
                        Kirim Formulir
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
