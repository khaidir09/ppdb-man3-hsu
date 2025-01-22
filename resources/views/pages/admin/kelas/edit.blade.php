@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="d-sm-flex align-datas-center justify-content-between mb-4">
            <h1 class="mb-0">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" /><path d="M11 16m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                Kelas
            </h1>
            <a href="{{ route('kelas.index') }}" class="btn btn-secondary mt-3 mt-md-0"
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
            <form action="{{ route('kelas.update', $data->id) }}" method="post">
                @method('PUT')
                @csrf
                    <div class="card-header bg-body-tertiary py-3">
                    <h6 class="m-0">Edit Data Kelas</h6>
                </div>
                <div class="card-body">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="jumlah" class="form-label">Nama Kelas</label>
                            <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            value="{{ $data->name }}"
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