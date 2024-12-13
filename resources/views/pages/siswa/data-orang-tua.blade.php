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
                class="icon icon-tabler icons-tabler-outline icon-tabler-users"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            Data Orang Tua
        </h1>
        <div class="card shadow mt-4">
            <form action="{{ route('data-orang-tua-update', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <label for="nama_ayah" class="form-label"
                                >Nama Ayah <span class="text-danger">*</span></label
                            >
                            <input
                                name="nama_ayah"
                                type="text"
                                class="form-control"
                                id="nama_ayah"
                                value="{{ $data->nama_ayah }}"
                                required
                            />
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="pendidikan_ayah" class="form-label"
                                >Pendidikan Ayah</label
                            >
                            <select
                                name="pendidikan_ayah"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                @if ($data->pendidikan_ayah != null)
                                    <option selected value="{{ $data->pendidikan_ayah }}">{{ $data->pendidikan_ayah }}</option>
                                @else
                                    <option selected value="">Pilih Pendidikan</option>
                                @endif
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/MTs</option>
                                <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="pekerjaan_ayah" class="form-label"
                                >Pekerjaan Ayah</label
                            >
                            <select
                                name="pekerjaan_ayah"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                @if ($data->pekerjaan_ayah != null)
                                    <option selected value="{{ $data->pekerjaan_ayah }}">{{ $data->pekerjaan_ayah }}</option>
                                @else
                                    <option selected value="">Pilih Pekerjaan</option>
                                @endif
                                <option value="PNS">PNS</option>
                                <option value="TNI/Polri">TNI/Polri</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Perawat/Bidan">Perawat/Bidan</option>
                                <option value="Pengusaha">Pengusaha</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Petani">Petani</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Sopir">Sopir</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="penghasilan_ayah" class="form-label"
                                >Rata-rata penghasilan Ayah perbulan</label
                            >
                            <select
                                name="penghasilan_ayah"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                @if ($data->penghasilan_ayah != null)
                                    <option selected value="{{ $data->penghasilan_ayah }}">{{ $data->penghasilan_ayah }}</option>
                                @else
                                    <option selected value="">Pilih Penghasilan</option>
                                @endif
                                <option value="<1000000">Kurang dari Rp 1.000.000</option>
                                <option value="1000000-3000000">
                                    Rp 1.000.000 - Rp 3.000.000
                                </option>
                                <option value="3000000-5000000">
                                    Rp 3.000.000 - Rp 5.000.000
                                </option>
                                <option value="5000000-10000000">
                                    Rp 5.000.000 - Rp 10.000.000
                                </option>
                                <option value=">10000000">Lebih dari Rp 10.000.000</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="nomor_hp_ayah" class="form-label"
                                >Nomor HP Ayah <span class="text-danger">*</span></label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="nomor_hp_ayah"
                                name="nomor_hp_ayah"
                                value="{{ $data->nomor_hp_ayah }}"
                                required
                            />
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="nama_ibu" class="form-label"
                                >Nama Ibu <span class="text-danger">*</span></label
                            >
                            <input
                                name="nama_ibu"
                                type="text"
                                class="form-control"
                                id="nama_ibu"
                                value="{{ $data->nama_ibu }}"
                                required
                            />
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="pendidikan_ibu" class="form-label"
                                >Pendidikan Ibu</label
                            >
                            <select
                                name="pendidikan_ibu"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                @if ($data->pendidikan_ibu != null)
                                    <option selected value="{{ $data->pendidikan_ibu }}">{{ $data->pendidikan_ibu }}</option>
                                @else
                                    <option selected value="">Pilih Pendidikan</option>
                                @endif
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/MTs</option>
                                <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="pekerjaan_ibu" class="form-label"
                                >Pekerjaan Ibu</label
                            >
                            <select
                                name="pekerjaan_ibu"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                @if ($data->pekerjaan_ibu != null)
                                    <option selected value="{{ $data->pekerjaan_ibu }}">{{ $data->pekerjaan_ibu }}</option>
                                @else
                                    <option selected value="">Pilih Pekerjaan</option>
                                @endif
                                <option value="PNS">PNS</option>
                                <option value="TNI/Polri">TNI/Polri</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Perawat/Bidan">Perawat/Bidan</option>
                                <option value="Pengusaha">Pengusaha</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Petani">Petani</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Sopir">Sopir</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="penghasilan_ibu" class="form-label"
                                >Rata-rata penghasilan Ibu perbulan</label
                            >
                            <select
                                name="penghasilan_ibu"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                @if ($data->penghasilan_ibu != null)
                                    <option selected value="{{ $data->penghasilan_ibu }}">{{ $data->penghasilan_ibu }}</option>
                                @else
                                    <option selected value="">Pilih Penghasilan</option>
                                @endif
                                <option value="<1000000">Kurang dari Rp 1.000.000</option>
                                <option value="1000000-3000000">
                                    Rp 1.000.000 - Rp 3.000.000
                                </option>
                                <option value="3000000-5000000">
                                    Rp 3.000.000 - Rp 5.000.000
                                </option>
                                <option value="5000000-10000000">
                                    Rp 5.000.000 - Rp 10.000.000
                                </option>
                                <option value=">10000000">Lebih dari Rp 10.000.000</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="nomor_hp_ibu" class="form-label"
                                >Nomor HP Ibu <span class="text-danger">*</span></label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="nomor_hp_ibu"
                                name="nomor_hp_ibu"
                                required
                                value="{{ $data->nomor_hp_ibu }}"
                            />
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