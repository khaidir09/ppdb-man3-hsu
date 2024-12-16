@extends('layouts.app')

@section('content')
    <div class="container laporan">
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
                Laporan Selesai Melengkapi Formulir
            </h1>
            <a target="_blank" href="{{ route('selesai-cetak') }}" class="btn tombol mt-3 mt-md-0"
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
                class="icon icon-tabler icons-tabler-outline icon-tabler-printer"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"
                />
                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                <path
                  d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"
                />
              </svg>
                Cetak Laporan</a
            >
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
                        class="table table-bordered w-100"
                    >
                        <thead class="bg-success text-white">
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th> 
                                <th class="text-center">NISN</th>
                                <th>Jenis Kelamin</th>
                                <th>TTL</th>
                                <th class="text-center">Nomor HP</th>
                                <th class="text-center">Nomor WA</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat Orang Tua</th>
                                <th>Hobi</th>
                                <th>Cita-cita</th>
                                <th class="text-center">Anak ke</th>
                                <th>Hubungan dalam keluarga</th>
                                <th class="text-center">Jumlah saudara kandung</th>
                                <th>Nama Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th class="text-center">Nomor HP Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th class="text-center">Nomor HP Ibu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->nisn }}</td>
                                    <td class="text-start">{{ $item->jenis_kelamin }}</td>
                                    <td class="text-start">{{ $item->tempat_lahir }}/{{ \Carbon\Carbon::parse($item->tgl_lahir)->locale('id')->translatedFormat('d F Y') }}</td>
                                    <td class="text-center">{{ $item->nomor_hp }}</td>
                                    <td class="text-center">{{ $item->nomor_wa }}</td>
                                    <td class="text-start">{{ $item->nama_sekolah_asal }}</td>
                                    <td class="text-start">
                                        {{ $item->alamat_sekolah_asal }}
                                    </td>
                                    <td class="text-start">{{ $item->hobi }}</td>
                                    <td class="text-start">{{ $item->cita_cita }}</td>
                                    <td class="text-center">{{ $item->anak_ke }}</td>
                                    <td class="text-start">{{ $item->hubungan_dalam_keluarga }}</td>
                                    <td class="text-center">{{ $item->jumlah_saudara_kandung }}</td>
                                    <td class="text-start">{{ $item->nama_ayah }}</td>
                                    <td class="text-start">{{ $item->pekerjaan_ayah }}</td>
                                    <td class="text-center">{{ $item->nomor_hp_ayah }}</td>
                                    <td class="text-start">{{ $item->nama_ibu }}</td>
                                    <td class="text-start">{{ $item->pekerjaan_ibu }}</td>
                                    <td class="text-center">{{ $item->nomor_hp_ibu }}</td>
                                </tr>
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
        $("#dataTable").DataTable({
            scrollX: true,
            autoWidth: false, // Pastikan properti ini ada untuk mencegah tabel melampaui container
        });
      });
    </script>
@endpush