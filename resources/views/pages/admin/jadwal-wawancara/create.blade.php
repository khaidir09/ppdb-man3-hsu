@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-question"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" /><path d="M19 22v.01" /><path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" /></svg>
                Jadwal Wawancara
            </h1>
            <a href="{{ route('jadwal-wawancara.index') }}" class="btn btn-secondary mt-3 mt-md-0"
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
            <form action="{{ route('jadwal-wawancara.store') }}" method="POST">
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
                    Tambah Data Jadwal Wawancara
                    </h6>
                </div>
                <div class="card-body">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row g-3">
                        <div class="form-group col-md-4">
                            <label for="nama_alur" class="form-label">Tanggal</label>
                            <input
                            type="date"
                            class="form-control"
                            id="tanggal"
                            placeholder=""
                            name="tanggal"
                            />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="waktu_mulai" class="form-label mb-2"
                            >Waktu Mulai</label
                            >
                            <select
                                name="waktu_mulai"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected value="">Pilih Waktu Mulai</option>
                                <option value="08.00 WITA">08.00 WITA</option>
                                <option value="08.30 WITA">08.30 WITA</option>
                                <option value="09.00 WITA">09.00 WITA</option>
                                <option value="09.30 WITA">09.30 WITA</option>
                                <option value="10.00 WITA">10.00 WITA</option>
                                <option value="10.30 WITA">10.30 WITA</option>
                                <option value="11.00 WITA">11.00 WITA</option>
                                <option value="11.30 WITA">11.30 WITA</option>
                                <option value="12.00 WITA">12.00 WITA</option>
                                <option value="12.30 WITA">12.30 WITA</option>
                                <option value="13.00 WITA">13.00 WITA</option>
                                <option value="13.30 WITA">13.30 WITA</option>
                                <option value="14.00 WITA">14.00 WITA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="waktu_akhir" class="form-label mb-2"
                            >Waktu Akhir</label
                            >
                            <select
                                name="waktu_akhir"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected value="">Pilih Waktu Akhir</option>
                                <option value="08.00 WITA">08.00 WITA</option>
                                <option value="08.30 WITA">08.30 WITA</option>
                                <option value="09.00 WITA">09.00 WITA</option>
                                <option value="09.30 WITA">09.30 WITA</option>
                                <option value="10.00 WITA">10.00 WITA</option>
                                <option value="10.30 WITA">10.30 WITA</option>
                                <option value="11.00 WITA">11.00 WITA</option>
                                <option value="11.30 WITA">11.30 WITA</option>
                                <option value="12.00 WITA">12.00 WITA</option>
                                <option value="12.30 WITA">12.30 WITA</option>
                                <option value="13.00 WITA">13.00 WITA</option>
                                <option value="13.30 WITA">13.30 WITA</option>
                                <option value="14.00 WITA">14.00 WITA</option>
                            </select>
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