<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<style>
            .siswa {
                page-break-after: always;
            }
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
        @foreach ($users as $item)
            <div class="siswa">
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
                <h3 class="text-center">Laporan Berkas Persyaratan Siswa</h3>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <td>: {{ $item->name }}</td>
                        </tr>
                        <tbody>
                        <tr>
                            <th scope="col">NISN</th>
                            <td>: {{ $item->nisn }}</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
                <table class="table w-100">
                    <thead class="text-center" style="background-color: #009e0f; color: #fff;">
                        <tr>
                            <th id="data" scope="col">Nama Dokumen</th>
                            <th id="data" scope="col">Gambar</th>
                        </tr>
                        <tbody class="text-center">
                        <tr>
                            <td id="data">Rapor</td>
                            <td id="data">
                                @if ($item->rapor != null)
                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($item->rapor)) }}" alt="" height="120">
                                @else
                                    Belum Unggah
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td id="data">Ijazah</td>
                            <td id="data">
                                @if ($item->ijazah != null)
                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($item->ijazah)) }}" height="120" alt="">
                                @else
                                    Belum Unggah
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td id="data">Kartu Keluarga</td>
                            <td id="data">
                                @if ($item->kartu_keluarga != null)
                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($item->kartu_keluarga)) }}" height="120" alt="">
                                @else
                                    Belum Unggah
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td id="data">Akta Kelahiran</td>
                            <td id="data">
                                @if ($item->akta != null)
                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($item->akta)) }}" height="120" alt="">
                                @else
                                    Belum Unggah
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td id="data">KIP</td>
                            <td id="data">
                                @if ($item->kip != null)
                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($item->kip)) }}" height="120" alt="">
                                @else
                                    Belum Unggah
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        @endforeach
	</body>
</html>
