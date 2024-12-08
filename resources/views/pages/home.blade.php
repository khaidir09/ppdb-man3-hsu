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
                        {{ \Carbon\Carbon::parse($pendaftaranOnline1)->locale('id')->translatedFormat('d F Y') }} s/d {{ \Carbon\Carbon::parse($pendaftaranOnline2)->locale('id')->translatedFormat('d F Y') }}
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
                @php
                    $i = 1;
                @endphp
                @foreach ($alur as $item)
                    <div class="col">
                        <div
                            class="ikon-alur d-inline-flex align-items-center text-white justify-content-center mb-3"
                        >
                            {!! $item->ikon_alur !!}
                        </div>
                        <h2>{{ $i++ }}. {{ $item->nama_alur }}</h2>
                        <p>
                            {{ $item->deskripsi_alur }}
                        </p>
                    </div>
                @endforeach
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
                            @foreach ($jadwal as $item)
                                <tr>
                                    <td>{{ $item->flow->nama_alur }}</th>
                                    <td>
                                        @if ($item->tgl_selesai != null)
                                            {{ \Carbon\Carbon::parse($item->tgl_mulai)->locale('id')->translatedFormat('d F Y') }} s/d {{ \Carbon\Carbon::parse($item->tgl_selesai)->locale('id')->translatedFormat('d F Y') }}
                                        @else
                                            {{ \Carbon\Carbon::parse($item->tgl_mulai)->locale('id')->translatedFormat('d F Y') }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tgl_selesai_gelombang2 != null)
                                            {{ \Carbon\Carbon::parse($item->tgl_mulai_gelombang2)->locale('id')->translatedFormat('d F Y') }} s/d {{ \Carbon\Carbon::parse($item->tgl_selesai_gelombang2)->locale('id')->translatedFormat('d F Y') }}
                                        @else
                                            {{ \Carbon\Carbon::parse($item->tgl_mulai_gelombang2)->locale('id')->translatedFormat('d F Y') }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
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