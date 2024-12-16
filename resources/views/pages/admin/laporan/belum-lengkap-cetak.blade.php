<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<style>
            .w-100 {
                width: 100%;
            }
            .text-left {
                text-align: left;
            }
            .text-center {
                text-align: center;
            }
            .text-right {
                text-align: right;
            }
            td,
            th,
            tr,
            table {
                border-collapse: collapse;
                font-size: 14px;
                padding: 4px;
            }

            #data {
                border: 1px solid #000000;
            }

        </style>
	</head>
	<body>
        <table class="w-100">
            <tr>
                <td class="text-left"><img src="images/hsu.png" alt="" height="120" /></td>
                <td class="text-center">
                    <h1>Penerimaan Peserta Didik Baru MAN 3 Hulu Sungai Utara <br />
						Tahun Pelajaran 2025/2026</h1>
                </td>
                <td class="text-right"><img src="images/kemenag.png" alt="" height="120" /></td>
            </tr>
        </table>
		<hr />
		<h3 class="text-center">Laporan Belum Melengkapi Formulir</h3>
		<table class="table w-100">
            <thead class="text-center" style="background-color: #009e0f; color: #fff;">
                <tr>
                    <th id="data" scope="col">No</th>
                    <th id="data" scope="col">NISN</th>
                    <th id="data" scope="col">Nama</th>
                    <th id="data" scope="col">Jenis Kelamin</th>
                    <th id="data" scope="col">TTL</th>
                    <th id="data" scope="col">Nomor WA</th>
                    <th id="data" scope="col">Sekolah Asal</th>
                    <th id="data" scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $item)
                    <tr>
                        <td id="data" class="text-center" scope="row">{{ $i++ }}</td>
                        <td id="data" class="text-center">{{ $item->nisn }}</td>
                        <td id="data">{{ $item->name }}</td>
                        <td id="data">{{ $item->jenis_kelamin }}</td>
                        <td id="data">{{ $item->tempat_lahir }}/{{ \Carbon\Carbon::parse($item->tgl_lahir)->locale('id')->translatedFormat('d F Y') }}</td>
                        <td id="data">{{ $item->nomor_wa }}</th>
                        <td id="data">{{ $item->nama_sekolah_asal }}</th>
                        <td id="data">{{ $item->alamat }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
	</body>
</html>
