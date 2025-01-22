@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" /><path d="M11 16m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                Kelas
            </h1>
            <a href="{{ route('kelas.create') }}" class="btn tombol mt-3 mt-md-0"
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
                class="icon icon-tabler icons-tabler-outline icon-tabler-plus"
                >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
                </svg>
                Tambah Data</a
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
                    Daftar Data Kelas
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        id="dataTable"
                        class="table table-bordered"
                        width="100%"
                        cellspacing="0">
                        <thead class="bg-success text-white">
                            <tr align="center">
                                <th class="text-center">No.</th>
                                <th>Nama Kelas</th>
                                <th>Jumlah Siswa</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($classrooms as $item)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center">
                                    {{ $item->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->student_count }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a
                                                data-toggle="tooltip"
                                                data-placement="bottom"
                                                title="Edit Data"
                                                href="{{ route('kelas.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm rounded"
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
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
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
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </a>
                                            <a
                                                data-toggle="tooltip"
                                                data-placement="bottom"
                                                title="Masukkan Siswa"
                                                href="{{ route('masukkan-siswa-kelas', $item->id) }}"
                                                class="btn btn-info btn-sm rounded ms-2"
                                                ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4c.96 0 1.84 .338 2.53 .901" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
                                            </a>
                                            <a
                                                data-toggle="tooltip"
                                                data-placement="bottom"
                                                title="Lihat Daftar Siswa"
                                                href="{{ route('kelas.show', $item->id) }}"
                                                class="btn btn-success btn-sm rounded ms-2"
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
                                            <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin untuk menghapus data ini?')" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm ms-2" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
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
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash"
                                                    >
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
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