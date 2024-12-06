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
    <div data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-smooth-scroll="true">
        <!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-2 py-md-0" id="main-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img
						src="images/logo.png"
						alt=""
						class="d-inline-block align-text-center"
					/>
					PPDB MAN 3 HSU</a
				>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="#hero"
								>Beranda</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#alur">Alur</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#jadwal">Jadwal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#persyaratan">Persyaratan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#grup">Kontak</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
