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
                    class="icon icon-tabler icons-tabler-outline icon-tabler-checklist"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                    d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"
                    />
                    <path d="M14 19l2 2l4 -4" />
                    <path d="M9 8h4" />
                    <path d="M9 12h2" />
                </svg>
                Persyaratan
            </h1>
            <a href="{{ route('persyaratan.index') }}" class="btn btn-secondary mt-3 mt-md-0"
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
            <form action="{{ route('persyaratan.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                    <div class="card-header bg-body-tertiary py-3">
                    <h6 class="m-0">Edit Data Persyaratan</h6>
                </div>
                <div class="card-body">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <label for="deskripsi_persyaratan" class="form-label mb-2"
                            >Deskripsi Persyaratan</label
                            >
                            <textarea
                            class="form-control"
                            id="deskripsi_persyaratan"
                            rows="1"
                            name="deskripsi_persyaratan"
                            >{{ $item->deskripsi_persyaratan }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input
                            type="text"
                            class="form-control"
                            id="jumlah"
                            placeholder=""
                            name="jumlah"
                            value="{{ $item->jumlah }}"
                            />
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