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
                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                    d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"
                    />
                    <path d="M16 3l0 4" />
                    <path d="M8 3l0 4" />
                    <path d="M4 11l16 0" />
                    <path d="M8 15h2v2h-2z" />
                </svg>
                Jadwal
            </h1>
            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary mt-3 mt-md-0"
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
            <form action="{{ route('jadwal.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                    <div class="card-header bg-body-tertiary py-3">
                    <h6 class="m-0">Edit Data Jadwal</h6>
                </div>
                <div class="card-body">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row g-3">
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="flows_id" class="form-label">Nama Kegiatan <span class="text-danger">*</span></label>
                            <select
                                name="flows_id"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected value="{{ $item->id }}">{{ $item->flow->nama_alur }}</option>
                                @foreach ($flows as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_alur }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="tgl_mulai" class="form-label">Tanggal Mulai Gelombang 1 <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('Y-m-d') }}"/>
                        </div>
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="tgl_selesai" class="form-label">Tanggal Selesai Gelombang 1</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="{{ \Carbon\Carbon::parse($item->tgl_selesai)->format('Y-m-d') }}"/>
                        </div>
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="tgl_mulai_gelombang2" class="form-label">Tanggal Mulai Gelombang 2 <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="tgl_mulai_gelombang2" name="tgl_mulai_gelombang2" value="{{ \Carbon\Carbon::parse($item->tgl_mulai_gelombang2)->format('Y-m-d') }}"/>
                        </div>
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="tgl_selesai_gelombang2" class="form-label">Tanggal Selesai Gelombang 2</label>
                            <input type="date" class="form-control" id="tgl_selesai_gelombang2" name="tgl_selesai_gelombang2" value="{{ \Carbon\Carbon::parse($item->tgl_selesai_gelombang2)->format('Y-m-d') }}"/>
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