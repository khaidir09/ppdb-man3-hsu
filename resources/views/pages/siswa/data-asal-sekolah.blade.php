@extends('layouts.siswa')

@section('content')
    <div class="container-fluid p-4 p-md-5">
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
            Data Asal Sekolah
        </h1>
        <div class="card shadow mt-4">
            <form action="{{ route('data-asal-sekolah-update', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_sekolah_asal" class="form-label"
                                >Nama Asal Sekolah <span class="text-danger">*</span></label
                            >
                            <input
                                name="nama_sekolah_asal"
                                type="text"
                                class="form-control"
                                id="nama_sekolah_asal"
                                value="{{ $data->nama_sekolah_asal }}"
                            />
                        </div>
                        <div class="col-md-6">
                            <label for="alamat_sekolah_asal" class="form-label"
                                >Alamat Asal Sekolah</label
                            >
                            <textarea name="alamat_sekolah_asal" class="form-control" id="alamat_sekolah_asal" rows="1">{{ $data->alamat_sekolah_asal }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <button type="submit" class="btn tombol mt-3">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection