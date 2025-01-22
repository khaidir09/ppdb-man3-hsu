@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" /><path d="M11 16m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                Kelas {{ $data->name }}
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
                <input type="hidden" id="classroomsId" value="{{ $data->id }}" />
                <button class="btn btn-success" id="buttonClassroom" fdprocessedid="ko12ik">Masukkan Siswa</button>
                <div class="table-responsive mt-3">
                    <table
                        class="table table-bordered"
                        width="100%"
                        cellspacing="0"
                        >
                        <thead class="bg-success text-white">
                            <tr class="text-center">
                                 <th>
                                    <input type="checkbox" id="selectAll" />
                                </th>
                                <th>No.</th>
                                <th>Nama</th>
                                <th class="text-center">NISN</th>
                                <th>Asal Sekolah</th>
                                <th class="text-center">Nomor WA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $item)
                                <tr align="center">
                                    <td>
                                        <input type="checkbox" class="selectRow" value="{{ $item->id }}" />
                                    </td>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->nisn }}</td>
                                    <td class="text-start">{{ $item->nama_sekolah_asal }}</td>
                                    <td class="text-center">{{ $item->nomor_wa }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script>
        // Select or Deselect All Rows
        $("#selectAll").on("change", function () {
            $(".selectRow").prop("checked", this.checked);
        });

        // Handle button click
        $("#buttonClassroom").on("click", function () {
            let selectedIds = [];
            $(".selectRow:checked").each(function () {
                selectedIds.push($(this).val());
            });

            if (selectedIds.length === 0) {
                alert("Pilih minimal satu siswa untuk dimasukkan ke kelas!");
                return;
            }

            // Ambil nilai classroomsId dari hidden input
            const classroomsId = $("#classroomsId").val();

            // Kirim data melalui AJAX
            $.ajax({
                url: "{{ route('simpan-siswa-kelas') }}",
                type: "POST",
                data: {
                    user_ids: selectedIds,
                    classrooms_id: classroomsId,
                    _token: "{{ csrf_token() }}",
                },
                success: function (response) {
                    alert(response.message);
                    location.reload(); // Refresh halaman setelah berhasil
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message || "Terjadi kesalahan saat memasukkan siswa!");
                },
            });
        });
    </script>
@endpush 