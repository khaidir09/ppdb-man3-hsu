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
                <div class="table-responsive">
                    <table
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
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $item)
                                <tr align="center">
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->nisn }}</td>
                                    <td class="text-start">{{ $item->nama_sekolah_asal }}</td>
                                    <td class="text-center">{{ $item->nomor_wa }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <form action="{{ route('sesi-wawancara.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin untuk menghapus data ini?')" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
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
                                        <a
                                            href="#statusWawancara{{ $item->id }}"
                                            data-bs-toggle="modal"
                                            class="btn btn-success btn-sm ms-1"
                                            >
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-progress-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" /><path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" /><path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" /><path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" /><path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" /><path d="M9 12l2 2l4 -4" /></svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div
                                    class="modal fade"
                                    id="statusWawancara{{ $item->id }}"
                                    tabindex="-1"
                                    aria-labelledby="statusWawancaraLabel"
                                    aria-hidden="true"
                                    >
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="{{ route('hasil-wawancara-siswa') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="users_id" value="{{ $item->id }}" />
                                                <input type="hidden" name="tanggal_wawancara" value="{{ \Carbon\Carbon::parse($data->tanggal)->locale('id')->translatedFormat('d F Y') }}" />
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="statusWawancaraLabel">
                                                    Perbarui Hasil Wawancara Siswa <br> <span class="text-success">{{ $item->name }}</span>
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
                                                            name="hasil_wawancara"
                                                            id="inlineRadio1"
                                                            value="Tidak Hadir"
                                                        />
                                                        <label class="form-check-label" for="inlineRadio1"
                                                            >Tidak Hadir</label
                                                        >
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="hasil_wawancara"
                                                            id="inlineRadio2"
                                                            value="Tidak Diterima"
                                                        />
                                                        <label class="form-check-label" for="inlineRadio2"
                                                            >Tidak Diterima</label
                                                        >
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="hasil_wawancara"
                                                            id="inlineRadio3"
                                                            value="Diterima"
                                                        />
                                                        <label class="form-check-label" for="inlineRadio3"
                                                            >Diterima</label
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
                                                    Simpan
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