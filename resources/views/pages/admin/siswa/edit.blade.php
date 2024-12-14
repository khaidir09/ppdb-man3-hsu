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
            <form action="{{ route('siswa.update', $data->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa">NISN</label>
                        <input
                            name="nisn"
                            type="number"
                            class="form-control"
                            id="nisn"
                            value="{{ $data->nisn }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Nama Siswa</label
                        >
                        <input
                            name="name"
                            type="text"
                            class="form-control"
                            id="name"
                            value="{{ $data->name }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3 form-label label-data-siswa">
                            Jenis Kelamin
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="jenis_kelamin"
                                id="jenis_kelamin_laki"
                                value="Laki-laki"
                                {{ $data->jenis_kelamin === 'Laki-laki' ? 'checked' : '' }}
                            />
                            <label class="form-check-label" for="jenis_kelamin_laki"
                                >Laki-laki</label
                            >
                        </div> 
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="jenis_kelamin"
                                id="jenis_kelamin_perempuan"
                                value="Perempuan"
                                {{ $data->jenis_kelamin === 'Perempuan' ? 'checked' : '' }}
                            />
                            <label class="form-check-label" for="jenis_kelamin_perempuan"
                                >Perempuan</label
                            >
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Tempat Lahir</label
                        >
                        <input
                            name="tempat_lahir"
                            type="text"
                            class="form-control"
                            id="tempat_lahir"
                            value="{{ $data->tempat_lahir }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Tanggal Lahir</label
                        >
                        <input
                            type="date"
                            class="form-control"
                            id="tgl_lahir"
                            name="tgl_lahir"
                            value="{{ $data->tgl_lahir }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Alamat Email</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            value="{{ $data->email }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Nomor HP Aktif</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="nomor_hp"
                            name="nomor_hp"
                            value="{{ $data->nomor_hp }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Nomor WA</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="nomor_wa"
                            name="nomor_wa"
                            value="{{ $data->nomor_wa }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa">Hobi</label>
                        <input
                            name="hobi"
                            type="text"
                            class="form-control"
                            id="hobi"
                            value="{{ $data->hobi }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Cita-cita</label
                        >
                        <input
                            name="cita_cita"
                            type="text"
                            class="form-control"
                            id="cita_cita"
                            value="{{ $data->cita_cita }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Siswa Anak ke</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="anak_ke"
                            name="anak_ke"
                            value="{{ $data->anak_ke }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Hubungan dalam keluarga</label
                        >
                        <select
                            name="hubungan_dalam_keluarga"
                            class="form-select"
                            aria-label="Default select example"
                        >
                            <option selected value="{{ $data->hubungan_dalam_keluarga }}">{{ $data->hubungan_dalam_keluarga }}</option>
                            <option value="Anak Kandung">Anak Kandung</option>
                            <option value="Anak Tiri">Anak Tiri</option>
                            <option value="Anak Angkat">Anak Angkat</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Jumlah saudara kandung</label
                        >
                        <input
                            name="jumlah_saudara_kandung"
                            type="number"
                            class="form-control"
                            id="jumlah_saudara_kandung"
                            value="{{ $data->jumlah_saudara_kandung }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <label for="" class="form-label label-data-siswa"
                        >Alamat Orang Tua</label
                        >
                        <textarea name="alamat" class="form-control" id="alamat" rows="1">{{ $data->alamat }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">
                        <button type="submit" class="btn tombol mt-3">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

        <div class="card shadow mb-4">
        <div class="card-header bg-card-header py-3">
            <h6 class="m-0">Data Sekolah Asal</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.update', $data->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Nama Sekolah Asal</label
                        >
                        <input
                            name="nama_sekolah_asal"
                            type="text"
                            class="form-control"
                            id="nama_sekolah_asal"
                            value="{{ $data->nama_sekolah_asal }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <label for="" class="form-label label-data-siswa"
                        >Alamat Sekolah Asal</label
                        >
                        <textarea name="alamat_sekolah_asal" class="form-control" id="alamat_sekolah_asal" rows="1">{{ $data->alamat_sekolah_asal }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">
                        <button type="submit" class="btn tombol mt-3">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

        <div class="card shadow">
        <div class="card-header bg-card-header py-3">
            <h6 class="m-0">Data Orang Tua</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.update', $data->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Nama Ayah</label
                        >
                        <input
                            name="nama_ayah"
                            type="text"
                            class="form-control"
                            id="nama_ayah"
                            value="{{ $data->nama_ayah }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
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
                        <label for="" class="form-label label-data-siswa"
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
                        <label for="" class="form-label label-data-siswa"
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
                        <label for="" class="form-label label-data-siswa"
                        >Nomor HP Ayah</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="nomor_hp_ayah"
                            name="nomor_hp_ayah"
                            value="{{ $data->nomor_hp_ayah }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
                        >Nama Ibu</label
                        >
                        <input
                            name="nama_ibu"
                            type="text"
                            class="form-control"
                            id="nama_ibu"
                            value="{{ $data->nama_ibu }}"
                        />
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="" class="form-label label-data-siswa"
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
                        <label for="" class="form-label label-data-siswa"
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
                        <label for="" class="form-label label-data-siswa"
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
                        <label for="" class="form-label label-data-siswa"
                        >Nomor HP Ibu</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="nomor_hp_ibu"
                            name="nomor_hp_ibu"
                            value="{{ $data->nomor_hp_ibu }}"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">
                        <button type="submit" class="btn tombol mt-3">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection