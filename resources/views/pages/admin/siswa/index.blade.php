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
                    class="icon icon-tabler icons-tabler-outline icon-tabler-school"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                </svg>
                Data Siswa
            </h1>
        </div>

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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-table"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                        d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"
                        />
                        <path d="M3 10h18" />
                        <path d="M10 3v18" />
                    </svg>
                    Daftar Data Siswa
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        id="dataTable"
                        class="table table-bordered"
                        width="100%"
                        cellspacing="0"
                        >
                        <thead class="bg-success text-white">
                            <tr class="text-center">
                            <th>No.</th>
                            <th>Nama</th>
                            <th class="text-center">NISN</th>
                            <th>Asal Sekolah</th>
                            <th class="text-center">Nomor WA</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $item)
                            @php
                                if ($item->status_pendaftaran === 'Perlu Perbaikan') :
                                    $color = 'text-bg-warning';
                                elseif ($item->status_pendaftaran === 'Selesai') :
                                    $color = 'text-bg-primary';
                                elseif ($item->status_pendaftaran === 'Tidak Lulus') :
                                     $color = 'text-bg-danger';
                                elseif ($item->status_pendaftaran === 'Lulus') :
                                     $color = 'text-bg-success';
                                else :
                                    $color = 'text-bg-dark';
                                endif
                            @endphp
                                <tr align="center">
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->nisn }}</td>
                                    <td class="text-start">{{ $item->nama_sekolah_asal }}</td>
                                    <td class="text-center">{{ $item->nomor_wa }}</td>
                                    <td class="text-center">
                                        <a
                                        href="#statusSiswa{{ $item->id }}"
                                        data-bs-toggle="modal"
                                        class="text-decoration-none badge rounded-pill {{ $color }} px-3 py-2"
                                        >
                                        @if ($item->email_verified_at === null)
                                            Belum Verifikasi
                                        @elseif ($item->nama_ayah === null || $item->nomor_hp_ayah === null || $item->nama_ibu === null || $item->nomor_hp_ibu === null)
                                            Belum Lengkap
                                        @elseif ($item->status_pendaftaran === null)
                                            Perlu Konfirmasi
                                        @else
                                            {{ $item->status_pendaftaran }}
                                        @endif
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                        <a
                                            data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Lihat Detail"
                                            href="{{ route('siswa.show', $item->id) }}"
                                            class="btn btn-info btn-sm"
                                        >
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
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-eye"
                                            >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"
                                            />
                                            </svg>
                                        </a>
                                        <a
                                            data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Edit Data"
                                            href="{{ route('siswa.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm"
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
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit"
                                            >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            />
                                            <path
                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"
                                            />
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"
                                            />
                                            <path d="M16 5l3 3" /></svg></a>
                                        <a
                                            data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Hapus Data"
                                            href=""
                                            onclick="return confirm('Apakah anda yakin untuk menghapus data ini')"
                                            class="btn btn-danger btn-sm"
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
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash"
                                            >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path
                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"
                                            />
                                            <path
                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"
                                            /></svg></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div
                                class="modal fade"
                                id="statusSiswa{{ $item->id }}"
                                tabindex="-1"
                                aria-labelledby="statusSiswaLabel"
                                aria-hidden="true"
                                >
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="{{ route('siswa.update', $item->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="statusSiswaLabel">
                                                    Perbarui Status Pendaftaran Siswa <br> <span class="text-success">{{ $item->name }}</span>
                                                    </h1>
                                                    <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                    ></button>
                                                </div>
                                                <div class="modal-body py-5 text-center">
                                                    <div class="form-check form-check-inline">
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="status_pendaftaran"
                                                        id="inlineRadio1"
                                                        value="Perlu Perbaikan"
                                                    />
                                                    <label class="form-check-label" for="inlineRadio1"
                                                        >Perlu Perbaikan</label
                                                    >
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="status_pendaftaran"
                                                        id="inlineRadio2"
                                                        value="Selesai"
                                                    />
                                                    <label class="form-check-label" for="inlineRadio2"
                                                        >Sudah Lengkap & Benar</label
                                                    >
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button
                                                    type="button"
                                                    class="btn tombol-batal"
                                                    data-bs-dismiss="modal"
                                                    >
                                                    Batal
                                                    </button>
                                                    <button type="submit" class="btn tombol">
                                                    Simpan Perubahan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/datatables.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        $("#dataTable").DataTable();
      });
    </script>
@endpush