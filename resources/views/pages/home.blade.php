@extends('layouts.guest')

@section('content')
    <!-- HERO -->
    <section id="hero">
        <div class="container">
            <div class="row text-center text-lg-start">
                <div class="col-lg-7">
                    <h1 class="display-1">PPDB Online {{ $namaSekolah}}</h1>
                    <h2 class="display-2">Tahun Pelajaran {{ $tahunPelajaran }}</h2>
                    <p class="mb-0">
                        Pastikan untuk mengisi formulir dengan teliti dan siapkan berkas
                        persyaratan sebelum mendaftar.
                    </p>
                    <div class="info-reg-online mx-auto mx-lg-0">
                        <h6>
                            Pendaftaran Online <br />
                            3 Maret s/d 9 Mei 2025
                        </h6>
                    </div>
                    <div
                        class="btn-container justify-content-center justify-content-lg-start"
                    >
                        <a href="pendaftaran.html" class="btn tombol-utama">
                            Daftar Sekarang <span class="ikon-panah">&#10230;</span>
                        </a>
                        <button class="btn tombol-kedua">
                            Login Calon Siswa <span class="ikon-panah">&#10230;</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0 align-self-center">
                    <img
                        src="images/hero-image.jpg"
                        alt=""
                        class="radius-gambar w-100"
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- ALUR -->
    <section id="alur" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h1 class="judul">Alur Pendaftaran</h1>
                </div>
            </div>
            <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div
                        class="ikon-alur d-inline-flex align-items-center text-white justify-content-center mb-3"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-data-connection"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 9.897c0 -1.714 1.46 -3.104 3.26 -3.104c.275 -1.22 1.255 -2.215 2.572 -2.611c1.317 -.397 2.77 -.134 3.811 .69c1.042 .822 1.514 2.08 1.239 3.3h.693a2.42 2.42 0 0 1 2.425 2.414a2.42 2.42 0 0 1 -2.425 2.414h-8.315c-1.8 0 -3.26 -1.39 -3.26 -3.103z"
                            />
                            <path d="M12 13v3" />
                            <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M14 18h7" />
                            <path d="M3 18h7" />
                        </svg>
                    </div>
                    <h2>1. Pendaftaran Secara Online</h2>
                    <p>
                        Membuat akun dan mengisi biodata diri, orang tua, asal sekolah.
                    </p>
                </div>
                <div class="col">
                    <div
                        class="ikon-alur d-inline-flex align-items-center text-white justify-content-center mb-3"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="icon icon-tabler icons-tabler-filled icon-tabler-zoom-check"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M14 3.072a8 8 0 0 1 2.617 11.424l4.944 4.943a1.5 1.5 0 0 1 -2.008 2.225l-.114 -.103l-4.943 -4.944a8 8 0 0 1 -12.49 -6.332l-.006 -.285l.005 -.285a8 8 0 0 1 11.995 -6.643zm-.293 4.22a1 1 0 0 0 -1.414 0l-3.293 3.294l-1.293 -1.293l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                            />
                        </svg>
                    </div>
                    <h2>2. Verifikasi Berkas</h2>
                    <p>Menyerahkan berkas persyaratan ke sekolah</p>
                </div>
                <div class="col">
                    <div
                        class="ikon-alur d-inline-flex align-items-center text-white justify-content-center mb-3"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-question"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M8 20l6 -6l3 -3l1.5 -1.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z"
                            />
                            <path d="M13.5 6.5l4 4" />
                            <path d="M19 22v.01" />
                            <path
                                d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"
                            />
                        </svg>
                    </div>
                    <h2>3. Tes Seleksi</h2>
                    <p>
                        Calon Peserta Didik Baru mengikuti tes seleksi sesuai jadwal &
                        ketentuan yang ada
                    </p>
                </div>
                <div class="col">
                    <div
                        class="ikon-alur d-inline-flex align-items-center text-white justify-content-center mb-3"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-certificate"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                            <path
                                d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"
                            />
                            <path d="M6 9l12 0" />
                            <path d="M6 12l3 0" />
                            <path d="M6 15l2 0" />
                        </svg>
                    </div>
                    <h2>4. Pengumuman Kelulusan</h2>
                    <p>Pengumuman dapat dilihat melalui website / datang ke sekolah</p>
                </div>
                <div class="col">
                    <div
                        class="ikon-alur d-inline-flex align-items-center text-white justify-content-center mb-3"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-certificate"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                            <path
                                d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"
                            />
                            <path d="M6 9l12 0" />
                            <path d="M6 12l3 0" />
                            <path d="M6 15l2 0" />
                        </svg>
                    </div>
                    <h2>5. Daftar Ulang</h2>
                    <p>
                        Peserta yang dinyatakan lulus wajib datang ke MAN 3 HSU untuk
                        melakukan daftar ulang
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- JADWAL -->
    <section id="jadwal" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1 class="judul">Jadwal PPDB</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th>Kegiatan</th>
                                <th>Gelombang 1</th>
                                <th>Gelombang 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pendaftaran Online</th>
                                <td>3 Maret 2025 s/d 28 Maret 2025</td>
                                <td>21 April 2025 s/d 9 Mei 2025</td>
                            </tr>
                            <tr>
                                <td>Verifikasi Berkas</th>
                                <td>31 Maret 2025 s/d 4 April 2025</td>
                                <td>12 Mei 2025 s/d 16 Mei 2025</td>
                            </tr>
                            <tr>
                                <td>Tes Seleksi</th>
                                <td>7 April 2025 s/d 10 April 2025</td>
                                <td>19 Mei 2025 s/d 22 Mei 2025</td>
                            </tr>
                            <tr>
                                <td>Pengumuman Kelulusan</th>
                                <td>14 April 2025</td>
                                <td>26 Mei 2025</td>
                            </tr>
                            <tr>
                                <td>Daftar Ulang</th>
                                <td>15 April 2025 s/d 2 Mei 2025</td>
                                <td>27 Mei 2025 s/d 9 Juni 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- PERSYARATAN -->
    <section id="persyaratan" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="judul">Persyaratan</h1>
                </div>
            </div>
            <div class="grid-container">
                <div class="box-persyaratan text-center text-white position-relative">
                    <div class="corner-fold"></div>
                    <h3>Fotocopy Raport Legalisir Kelas IX</h3>
                    <span class="badge badge-persyaratan">1 Lembar</span>
                </div>
                <div class="box-persyaratan text-center text-white position-relative">
                    <div class="corner-fold"></div>
                    <h3>Fotocopy IJAZAH Legalisir</h3>
                    <span class="badge badge-persyaratan">1 Lembar</span>
                </div>
                <div class="box-persyaratan text-center text-white position-relative">
                    <div class="corner-fold"></div>
                    <h3>Pas Photo Hitam Putih</h3>
                    <span class="badge badge-persyaratan">3x4 (3 lembar), 2x3 (2 lembar), 4x6 (1 lembar)</span>
                </div>
                <div class="box-persyaratan text-center text-white position-relative">
                    <div class="corner-fold"></div>
                    <h3>Fotocopy Kartu Keluarga</h3>
                    <span class="badge badge-persyaratan">1 Lembar</span>
                </div>
                <div class="box-persyaratan text-center text-white position-relative">
                    <div class="corner-fold"></div>
                    <h3>Fotocopy Akta Kelahiran</h3>
                    <span class="badge badge-persyaratan">1 Lembar</span>
                </div>
                <div class="box-persyaratan text-center text-white position-relative">
                    <div class="corner-fold"></div>
                    <h3>Fotocopy KIP jika ada</h3>
                    <span class="badge badge-persyaratan">1 Lembar</span>
                </div>
            </div>
        </div>
    </section>
    <section id="grup" class="text-white">
        <div class="container box-cta">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <h3>Punya pertanyaan seputar PPDB ?</h3>
                    <p class="mb-0">Klik tombol "Gabung Group WA" untuk mendapatkan informasi yang terupdate mengenai Penerimaan Peserta Didik Baru {{ $namaSekolah }}.</p>
                </div>
                <div class="col-md-6 col-lg-4 align-self-center text-end">
                    <a href="" class="btn btn-cta">
                        <span><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg></span> Gabung Grup WA
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection