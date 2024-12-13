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
                <li class="nav-item {{ Route::is('dashboard-siswa') ? 'active' : '' }}">
                    <a href="{{ route('dashboard-siswa') }}" class="nav-link"> Dashboard </a>
                </li>
                <li class="nav-item {{ Route::is('data-diri') ? 'active' : '' }}">
                    <a href="{{ route('data-diri') }}" class="nav-link"> Data Diri </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"> Data Asal Sekolah </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"> Data Orang Tua </a>
                </li>
            </ul>
        </div>
    </nav>
</div>