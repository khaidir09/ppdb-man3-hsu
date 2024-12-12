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
    <div class="container">
        <div class="row text-center align-items-center" id="verifikasi">
            <div class="col">
                <h3>Terima kasih sudah mendaftar melalui website PPDB Online MAN 3 HSU.</h3>
                <p>Kami baru saja mengirim email verifikasi ke email yang kamu daftarkan. Untuk melanjutkan proses pendaftaran harap verifikasi akun kamu melalui email tersebut.</p>
                <p>Jika kamu belum menerima email, kirim ulang email verifikas dengan menekan tombol dibawah ini.</p>

                @if (session('status') == 'verification-link-sent')
                    <p class="mb-4">A new verification link has been sent to the email address you provided during registration.</p>
                @endif

                <div class="mt-4">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div>
                            <button type="submit" class="btn tombol">Kirim Ulang Email Verifikasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
