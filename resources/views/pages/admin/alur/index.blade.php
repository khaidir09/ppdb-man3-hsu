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
                class="icon icon-tabler icons-tabler-outline icon-tabler-stairs"
                >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M22 5h-5v5h-5v5h-5v5h-5" />
                </svg>
                Alur
            </h1>
            <a href="{{ route('alur.create') }}" class="btn tombol mt-3 mt-md-0"
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
                    Daftar Data Alur
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
                                <th>Nama Alur</th>
                                <th>Deskripsi Alur</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($flows as $item)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $item->nama_alur }}</td>
                                    <td>
                                    {{ $item->deskripsi_alur }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a
                                            data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Edit Data"
                                            href="{{ route('alur.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm rounded"
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
                                            <form action="{{ route('alur.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin untuk menghapus data ini?')" style="display: inline;">
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