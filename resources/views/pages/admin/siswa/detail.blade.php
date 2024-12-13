@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div
        class="d-sm-flex align-items-center justify-content-between mb-4"
        >
        <h1 class="mb-0">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="38"
            height="38"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-school"
            >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
            </svg>
            Data Siswa
        </h1>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3 mt-md-0"
            ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"
            >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l14 0" />
            <path d="M5 12l6 6" />
            <path d="M5 12l6 -6" />
            </svg>
            Kembali</a
        >
        </div>

        <div class="card shadow mb-4">
        <div class="card-header bg-card-header py-3">
            <h6 class="m-0">Data Diri</h6>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa">NISN</label>
                <p>{{ $user->nisn }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nama Siswa</label
                >
                <p>{{ $user->name }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Jenis Kelamin</label
                >
                <p>{{ $user->jenis_kelamin }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Tempat Lahir</label
                >
                <p>{{ $user->tempat_lahir }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Tanggal Lahir</label
                >
                <p>{{ \Carbon\Carbon::parse($user->tgl_lahir)->locale('id')->translatedFormat('d F Y') }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Alamat Email</label
                >
                <p>{{ $user->email }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nomor HP Aktif</label
                >
                <p>{{ $user->nomor_hp }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nomor WA</label
                >
                <p>{{ $user->nomor_wa }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa">Hobi</label>
                <p>{{ $user->hobi }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Cita-cita</label
                >
                <p>{{ $user->cita_cita }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Siswa Anak ke</label
                >
                <p>{{ $user->anak_ke }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Hubungan dalam keluarga</label
                >
                <p>{{ $user->hubungan_dalam_keluarga }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Jumlah saudara kandung</label
                >
                <p>{{ $user->jumlah_saudara_kandung }}</p>
            </div>
            <div class="col-md-6 col-lg-8">
                <label for="" class="form-label label-data-siswa"
                >Alamat Orang Tua</label
                >
                <p>{{ $user->alamat }}</p>
            </div>
            </div>
        </div>
        </div>

        <div class="card shadow mb-4">
        <div class="card-header bg-card-header py-3">
            <h6 class="m-0">Data Sekolah Asal</h6>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nama Sekolah Asal</label
                >
                <p>{{ $user->nama_sekolah_asal }}</p>
            </div>
            <div class="col-md-6 col-lg-8">
                <label for="" class="form-label label-data-siswa"
                >Alamat Sekolah Asal</label
                >
                <p>{{ $user->alamat_sekolah_asal }}</p>
            </div>
            </div>
        </div>
        </div>

        <div class="card shadow">
        <div class="card-header bg-card-header py-3">
            <h6 class="m-0">Data Orang Tua</h6>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nama Ayah</label
                >
                <p>{{ $user->nama_ayah }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Pendidikan Ayah</label
                >
                <p>{{ $user->pendidikan_ayah }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Pekerjaan Ayah</label
                >
                <p>{{ $user->pekerjaan_ayah }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Rata-rata penghasilan Ayah perbulan</label
                >
                <p>{{ $user->penghasilan_ayah }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nomor HP Ayah</label
                >
                <p>{{ $user->nomor_hp_ayah }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nama Ibu</label
                >
                <p>{{ $user->nama_ibu }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Pendidikan Ibu</label
                >
                <p>{{ $user->pendidikan_ibu }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Pekerjaan Ibu</label
                >
                <p>{{ $user->pekerjaan_ibu }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Rata-rata penghasilan Ibu perbulan</label
                >
                <p>{{ $user->penghasilan_ibu }}</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="" class="form-label label-data-siswa"
                >Nomor HP Ibu</label
                >
                <p>{{ $user->nomor_hp_ibu }}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection