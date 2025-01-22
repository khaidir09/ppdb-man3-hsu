@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-question"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" /><path d="M19 22v.01" /><path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" /></svg>
                Jadwal Wawancara {{ \Carbon\Carbon::parse($data->tanggal)->locale('id')->translatedFormat('d F Y') }}
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
                <input type="hidden" id="interviewSchedulesId" value="{{ $data->id }}" />
                <button class="btn btn-success" id="buttonSchedule" fdprocessedid="ko12ik">Jadwalkan Wawancara</button>
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
        $("#buttonSchedule").on("click", function () {
            let selectedIds = [];
            $(".selectRow:checked").each(function () {
                selectedIds.push($(this).val());
            });

            if (selectedIds.length === 0) {
                alert("Pilih minimal satu siswa untuk dijadwalkan!");
                return;
            }

            // Ambil nilai interviewSchedulesId dari hidden input
            const interviewSchedulesId = $("#interviewSchedulesId").val();

            // Kirim data melalui AJAX
            $.ajax({
                url: "{{ route('simpan-wawancara-siswa') }}",
                type: "POST",
                data: {
                    user_ids: selectedIds,
                    interview_schedules_id: interviewSchedulesId,
                    _token: "{{ csrf_token() }}",
                },
                success: function (response) {
                    alert(response.message);
                    location.reload(); // Refresh halaman setelah berhasil
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message || "Terjadi kesalahan saat menjadwalkan!");
                },
            });
        });
    </script>
@endpush 