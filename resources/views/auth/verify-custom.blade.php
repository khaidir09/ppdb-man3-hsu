<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat datang di PPDB Online MAN 3 HSU</title>
</head>
<body>
    <header>
        <img src="{{ asset('images/kemenag.png') }}" height="100" alt="">
        <h1>PPDB Online MAN 3 HSU</h1>
    </header>

    <main>
        <h2>Salam {{ $user->name }}.</h2>
        <p>Terima kasih sudah mendaftar melalui website PPDB Online MAN 3 HSU. Untuk melanjutkan pengisian formulir pendaftaran, harap verifikasi email kamu dengan menekan tombol verifikasi dibawah ini.</p>
        <a href="{{ $url }}" style="background-color: #009e0f; color: #fff; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 14px; text-decoration: none;">
            Verifikasi Email
        </a>
        <p>Jika kamu tidak merasa mendaftar melalui website PPDB Online MAN 3 HSU, abaikan email ini.</p>
    </main>
</body>
</html>