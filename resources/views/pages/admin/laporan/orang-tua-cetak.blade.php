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
		<h3 class="text-center">Laporan Data Orang Tua Siswa</h3>
		<table class="table w-100">
            <thead class="text-center" style="background-color: #009e0f; color: #fff;">
                <tr>
                    <th id="data" scope="col">No</th>
                    <th id="data" scope="col">Nama Ayah</th>
                    <th id="data" scope="col">Pekerjaan Ayah</th>
                    <th id="data" scope="col">Nomor HP Ayah</th>
                    <th id="data" scope="col">Nama Ibu</th>
                    <th id="data" scope="col">Pekerjaan Ibu</th>
                    <th id="data" scope="col">Nomor HP Ibu</th>
                    <th id="data" scope="col">Alamat</th>
                    <th id="data" scope="col">Nama Siswa</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $item)
                    <tr>
                        <td id="data" class="text-center" scope="row">{{ $i++ }}</td>
                        <td id="data">{{ $item->nama_ayah }}</th>
                        <td id="data">{{ $item->pekerjaan_ayah }}</th>
                        <td id="data">{{ $item->nomor_hp_ayah }}</th>
                        <td id="data">{{ $item->nama_ibu }}</th>
                        <td id="data">{{ $item->pekerjaan_ibu }}</th>
                        <td id="data">{{ $item->nomor_hp_ibu }}</th>
                        <td id="data">{{ $item->alamat }}</th>
                        <td id="data">{{ $item->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
	</body>
</html>
