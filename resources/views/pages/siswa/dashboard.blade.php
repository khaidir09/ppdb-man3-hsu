@extends('layouts.siswa')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <div class="card shadow py-2 mb-4">
            <div class="card-body">
                <h1>Salam,</h1>
                <h6>Selamat datang di PPDB Online {{ $namaSekolah }}.</h6>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <strong>Perhatian!</strong> Kamu belum melengkapi formulir Data Orang Tua, <a href="">klik disini untuk melengkapi</a>.
        </div>
         <div class="row">
            <div class="col">
                <table class="table table table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th>Kegiatan</th>
                            <th>Gelombang 1</th>
                            <th>Gelombang 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $item)
                            <tr>
                                <td>{{ $item->flow->nama_alur }}</th>
                                <td>
                                    @if ($item->tgl_selesai != null)
                                        {{ \Carbon\Carbon::parse($item->tgl_mulai)->locale('id')->translatedFormat('d F Y') }} s/d {{ \Carbon\Carbon::parse($item->tgl_selesai)->locale('id')->translatedFormat('d F Y') }}
                                    @else
                                        {{ \Carbon\Carbon::parse($item->tgl_mulai)->locale('id')->translatedFormat('d F Y') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($item->tgl_selesai_gelombang2 != null)
                                        {{ \Carbon\Carbon::parse($item->tgl_mulai_gelombang2)->locale('id')->translatedFormat('d F Y') }} s/d {{ \Carbon\Carbon::parse($item->tgl_selesai_gelombang2)->locale('id')->translatedFormat('d F Y') }}
                                    @else
                                        {{ \Carbon\Carbon::parse($item->tgl_mulai_gelombang2)->locale('id')->translatedFormat('d F Y') }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection