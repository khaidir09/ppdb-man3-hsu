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
                Laporan Berkas
            </h1>
            <a target="_blank" href="{{ route('berkas-cetak') }}" class="btn tombol mt-3 mt-md-0"
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
                                <th class="text-center">Nomor HP/WA</th>
                                <th class="text-center">Rapor</th>
                                <th class="text-center">Ijazah</th>
                                <th class="text-center">Kartu Keluarga</th>
                                <th class="text-center">Akta Kelahiran</th>
                                <th class="text-center">KIP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $item)
                                <tr class="align-middle">
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->nisn }}</td>
                                    @if ($item->nomor_hp === $item->nomor_wa)
                                        <td class="text-center">{{ $item->nomor_hp }}</td>
                                    @else
                                        <td class="text-center">{{ $item->nomor_hp }} / {{ $item->nomor_wa }}</td>
                                    @endif
                                    <td class="text-center">
                                        @if ($item->rapor != null)
                                            <a href="{{ url($item->rapor) }}" data-lightbox="rapor-{{ $item->id }}" data-title="Rapor {{ $item->name }}">
                                                <img src="{{ url($item->rapor) }}" height="100" alt="" class="img-thumbnail">
                                            </a>
                                        @else
                                            <span class="badge bg-danger">Belum Unggah</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($item->ijazah != null)
                                            <a href="{{ url($item->ijazah) }}" data-lightbox="ijazah-{{ $item->id }}" data-title="Ijazah {{ $item->name }}">
                                                <img src="{{ url($item->ijazah) }}" height="100" alt="" class="img-thumbnail">
                                            </a>
                                        @else
                                            <span class="badge bg-danger">Belum Unggah</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($item->kartu_keluarga != null)
                                            <a href="{{ url($item->kartu_keluarga) }}" data-lightbox="kartu_keluarga-{{ $item->id }}" data-title="Kartu Keluarga {{ $item->name }}">
                                                <img src="{{ url($item->kartu_keluarga) }}" height="100" alt="" class="img-thumbnail">
                                            </a>
                                        @else
                                            <span class="badge bg-danger">Belum Unggah</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($item->akta != null)
                                            <a href="{{ url($item->akta) }}" data-lightbox="akta-{{ $item->id }}" data-title="Akta Kelahiran {{ $item->name }}">
                                                <img src="{{ url($item->akta) }}" height="100" alt="" class="img-thumbnail">
                                            </a>
                                        @else
                                            <span class="badge bg-danger">Belum Unggah</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($item->kip != null)
                                            <a href="{{ url($item->kip) }}" data-lightbox="kip-{{ $item->id }}" data-title="KIP {{ $item->name }}">
                                                <img src="{{ url($item->kip) }}" height="100" alt="" class="img-thumbnail">
                                            </a>
                                        @else
                                            <span class="badge bg-danger">Belum Unggah / Tidak Punya</span>
                                        @endif
                                    </td>
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
    <link rel="stylesheet" href="{{ asset('vendor/lightbox2-dev/dist/css/lightbox.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/lightbox2-dev/dist/js/lightbox.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        $("#dataTable").DataTable({
            scrollX: true,
            autoWidth: false, // Pastikan properti ini ada untuk mencegah tabel melampaui container
        });
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'maxWidth': 800,
            'maxHeight': 600,
        });
      });
    </script>
@endpush