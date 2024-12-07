@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <h1 class="mb-3">
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
                class="icon icon-tabler icons-tabler-outline icon-tabler-building"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l18 0" />
                <path d="M9 8l1 0" />
                <path d="M9 12l1 0" />
                <path d="M9 16l1 0" />
                <path d="M14 8l1 0" />
                <path d="M14 12l1 0" />
                <path d="M14 16l1 0" />
                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
            </svg>
            Profil Madrasah
        </h1>
        <div class="card shadow">
            <div class="card-header bg-body-tertiary py-3">
                <h6 class="m-0">
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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-plus"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                    Isi Data Profil Madrasah
                </h6>
            </div>
            <form action="{{ route('profil-madrasah-update', $profil->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <label for="tahun_pelajaran" class="form-label">Tahun Pelajaran</label>
                            <input
                                type="text"
                                class="form-control"
                                id="tahun_pelajaran"
                                name="tahun_pelajaran"
                                value="{{ $profil->tahun_pelajaran }}"
                            />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama_sekolah" class="form-label">Nama Madrasah</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama_sekolah"
                                name="nama_sekolah"
                                value="{{ $profil->nama_sekolah }}"
                            />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telepon_sekolah" class="form-label"
                                >No. Telpon Madrasah</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="telepon_sekolah"
                                placeholder=""
                                name="telepon_sekolah"
                                value="{{ $profil->telepon_sekolah }}"
                            />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email_sekolah" class="form-label">Email Madrasah</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email_sekolah"
                                name="email_sekolah"
                                value="{{ $profil->email_sekolah }}"
                            />
                        </div>
                        <div class="form-group col">
                            <label for="alamat_sekolah" class="form-label mb-2"
                                >Alamat Madrasah</label
                            >
                            <textarea class="form-control" id="alamat_sekolah" rows="1" name="alamat_sekolah">
    {!! $profil->alamat_sekolah !!}</textarea
                            >
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-body-tertiary text-end">
                    <button type="" class="btn tombol-batal me-1">Batal</button>
                    <button type="submit" class="btn tombol">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection