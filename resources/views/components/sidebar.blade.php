<div>
    <nav id="sidebar" class="sidebar collapse show">
        <div class="p-3">
            <a
                class="sidebar-brand d-flex align-items-center justify-content-center"
                href=""
            >
                <img src="{{ asset('images/kemenag.png') }}" alt="" height="60" />
                <div class="sidebar-brand-text mx-3">PPDB 2025/2026</div>
            </a>
            <hr class="divider" />
            <ul class="nav flex-column">
                <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link"> Dashboard </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link d-flex justify-content-between align-items-center {{ (request()->is(['admin/master/profil-madrasah*', 'admin/master/alur*', 'admin/master/jadwal*', 'admin/master/persyaratan*'])) ? 'collapsed' : '' }}"
                        href="#submenumaster"
                        data-bs-toggle="collapse"
                        aria-expanded="{{ (request()->is(['admin/master/profil-madrasah*', 'admin/master/alur*', 'admin/master/jadwal*', 'admin/master/persyaratan*'])) ? 'true' : 'false' }}"
                    >
                        Data Master PPDB
                        <svg
                            id="icon-menu"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </a>
                    <div class="collapse {{ (request()->is(['admin/master/profil-madrasah*', 'admin/master/alur*', 'admin/master/jadwal*', 'admin/master/persyaratan*'])) ? 'show' : '' }}" id="submenumaster">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item {{ Route::is('profil-madrasah') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('profil-madrasah') }}"
                                    >Profil Madrasah</a
                                >
                            </li>
                            <li class="nav-item {{ Route::is('alur*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('alur.index') }}">Alur</a>
                            </li>
                            <li class="nav-item {{ Route::is('jadwal*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('jadwal.index') }}">Jadwal</a>
                            </li>
                            <li class="nav-item {{ Route::is('persyaratan*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('persyaratan.index') }}">Persyaratan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Route::is('siswa*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.index') }}" class="nav-link"> Data Siswa </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link d-flex justify-content-between align-items-center"
                        href="#submenulaporan"
                        data-bs-toggle="collapse"
                        aria-expanded="false"
                    >
                        Laporan
                        <svg
                            id="icon-menu"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </a>
                    <div class="collapse {{ (request()->is('admin/laporan*')) ? 'show' : '' }}" id="submenulaporan">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item {{ Route::is('keseluruhan-data-pendaftar') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('keseluruhan-data-pendaftar') }}">Keseluruhan Data Pendaftar</a>
                            </li>
                            <li class="nav-item {{ Route::is('belum-verifikasi') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('belum-verifikasi') }}">Belum Verifikasi Akun</a>
                            </li>
                            <li class="nav-item {{ Route::is('belum-lengkap') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('belum-lengkap') }}">Belum Melengkapi Formulir</a>
                            </li>
                            <li class="nav-item {{ Route::is('selesai') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('selesai') }}">Selesai Melengkapi Formulir</a>
                            </li>
                            <li class="nav-item {{ Route::is('perbaikan') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('perbaikan') }}">Data Perlu Perbaikan</a>
                            </li>
                            <li class="nav-item {{ Route::is('orang-tua') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('orang-tua') }}">Data Orang Tua</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>