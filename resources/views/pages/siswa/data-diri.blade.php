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
                class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
                <path
                    d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"
                />
            </svg>
            Data Diri
        </h1>
        <div class="card shadow mt-4">
            <form action="{{ route('data-diri-update', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <label for="nisn" class="form-label"
                                >NISN <span class="text-danger">*</span></label
                            >
                            <input
                                name="nisn"
                                type="number"
                                class="form-control"
                                id="nisn"
                                value="{{ $data->nisn }}"
                            />
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="name" class="form-label"
                                >Nama Siswa <span class="text-danger">*</span></label
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
                            <div class="mb-3" style="font-weight: 700">
                                Jenis Kelamin <span class="text-danger">*</span>
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
                            <label for="tempat_lahir" class="form-label"
                                >Tempat Lahir <span class="text-danger">*</span></label
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
                            <label for="tgl_lahir" class="form-label"
                                >Tanggal Lahir <span class="text-danger">*</span></label
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
                            <label for="email" class="form-label"
                                >Alamat Email <span class="text-danger">*</span></label
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
                            <label for="nomor_hp" class="form-label"
                                >No. HP Aktif <span class="text-danger">*</span></label
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
                            <label for="nomor_wa" class="form-label"
                                >No. Whatsapp <span class="text-danger">*</span></label
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
                            <label for="hobi" class="form-label">Hobi</label>
                            <input
                                name="hobi"
                                type="text"
                                class="form-control"
                                id="hobi"
                                value="{{ $data->hobi }}"
                            />
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="cita_cita" class="form-label">Cita-cita</label>
                            <input
                                name="cita_cita"
                                type="text"
                                class="form-control"
                                id="cita_cita"
                                value="{{ $data->cita_cita }}"
                            />
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label for="anak_ke" class="form-label"
                                >Siswa Anak ke Berapa</label
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
                            <label for="hubungan_dalam_keluarga" class="form-label"
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
                            <label for="jumlah_saudara_kandung" class="form-label"
                                >Jumlah Saudara Kandung</label
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
                            <label for="alamat" class="form-label mb-2"
                                >Alamat Orang Tua</label
                            >
                            <textarea name="alamat" class="form-control" id="alamat" rows="1">Jl. Negara Dipa RT.1 Kel.Sungai Malang</textarea>
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