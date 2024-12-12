<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
			href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 text-center align-content-center" id="sidebar-login">
                <img src="{{ asset('images/kemenag.png') }}" alt="" height="150" />
                <h2>
                    PPDB MAN 3 HSU <br />
                    2025/2026
                </h2>
                <!-- Jadwal -->
                <div class="info-jadwal">
                    <h5>Jadwal Pendaftaran Online</h5>
                    <p>Gelombang 1 (3 Maret 2025 s/d 28 Maret 2025)</p>
                    <p>Gelombang 2 (21 April 2025 s/d 9 Mei 2025)</p>
                </div>
                <!-- CTA -->
                <div>
                    <p class="mb-2">Belum punya akun PPDB ?</p>
                    <a href="{{ route('register') }}" class="btn btn-login">Daftar Akun PPDB</a>
                </div>
                <div>
                    <p class="mt-3 mb-2">Butuh informasi PPDB ?</p>
                    <a href="" class="btn btn-grup-wa">
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
                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                            <path
                                d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"
                            />
                        </svg>
                        Gabung Grup WA
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto align-content-center" id="form-login">
                <div class="container">
                    <div class="row">
                        <div class="col align-self-center">
                            <h3>Masuk</h3>
                            <h6 class="mb-0">Gunakan Akun PPDB Anda</h6>
                        </div>
                        <div class="col text-end">
                            <img src="{{ asset('images/kemenag.png') }}" alt="" height="100" />
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('calon.login') }}" method="POST">
                        @csrf
                        <label for="email" class="form-label"
                            >Alamat Email <span class="text-danger">*</span></label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder=""
                        />
                        <label for="password" class="form-label mt-3"
                            >Kata Sandi <span class="text-danger">*</span></label
                        >
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder=""
                        />
                        <button type="submit" class="btn tombol w-100 mt-3">
                            Masuk Akun
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>