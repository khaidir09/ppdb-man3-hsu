<div>
    <nav class="navbar navbar-expand navbar-light bg-light shadow">
        <div class="container-fluid">
            <button
                class="btn btn-dark d-md-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#sidebar"
            >
                ☰
            </button>
            <div class="dropdown ms-auto">
                <a
                    href="#"
                    class="d-flex align-items-center text-dark text-decoration-none"
                    id="dropdownUser"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                        src=""
                        alt="profile"
                        class="rounded-circle me-2 d-none d-md-block"
                    />
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end text-small"
                    aria-labelledby="dropdownUser"
                >
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>