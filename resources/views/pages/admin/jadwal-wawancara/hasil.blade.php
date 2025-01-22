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
                Hasil Wawancara
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
                            <th class="text-center">Tanggal Wawancara</th>
                            <th class="text-center">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($results as $item)
                            @php
                                if ($item->hasil_wawancara === 'Tidak Diterima') :
                                    $color = 'text-bg-danger';
                                elseif ($item->hasil_wawancara === 'Diterima') :
                                    $color = 'text-bg-primary';
                                else :
                                    $color = 'text-bg-warning';
                                endif
                            @endphp
                                <tr align="center">
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-start">{{ $item->user->name }}</td>
                                    <td class="text-center">{{ $item->user->nisn }}</td>
                                    <td class="text-start">{{ $item->user->nama_sekolah_asal }}</td>
                                    <td class="text-center">{{ $item->user->nomor_wa }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_wawancara)->locale('id')->translatedFormat('d F Y') }}</td>
                                    <td class="text-center">{{ $item->hasil_wawancara }}</td>
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
        $("#dataTable").DataTable();
      });
    </script>
@endpush