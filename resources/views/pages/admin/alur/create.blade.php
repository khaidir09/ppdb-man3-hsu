@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
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
                class="icon icon-tabler icons-tabler-outline icon-tabler-stairs"
                >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M22 5h-5v5h-5v5h-5v5h-5" />
                </svg>
                Alur
            </h1>
            <a href="{{ route('alur.index') }}" class="btn btn-secondary mt-3 mt-md-0"
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

        <div class="card shadow">
            <form action="{{ route('alur.store') }}" method="POST">
                @csrf
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
                    Tambah Data Alur
                    </h6>
                </div>
                <div class="card-body">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <label for="nama_alur" class="form-label">Nama Alur</label>
                            <input
                            type="text"
                            class="form-control"
                            id="nama_alur"
                            placeholder=""
                            name="nama_alur"
                            />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi_alur" class="form-label mb-2"
                            >Deskripsi Alur</label
                            >
                            <textarea
                            class="form-control"
                            id="deskripsi_alur"
                            rows="1"
                            name="deskripsi_alur"
                            ></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ikon_alur" class="form-label mb-2"
                            >Ikon Alur</label
                            >
                            <textarea
                            class="form-control"
                            id="ikon_alur"
                            rows="1"
                            name="ikon_alur"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-body-tertiary text-end">
                    <button type="reset" class="btn tombol-batal me-1">Batal</button>
                    <button type="submit" class="btn tombol">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection