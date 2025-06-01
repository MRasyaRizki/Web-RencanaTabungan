<nav class="sidebar d-flex flex-column" id="sidebar">
    <div class="sidebar-header d-flex justify-content-between align-items-center px-3 py-2">
        <h4 class="mb-0">TabungSantuy</h4>
    </div>

    <div class="flex-grow-1 overflow-auto">
        <ul class="nav flex-column px-2">
            <li class="nav-item mb-2">
                <a href="{{ route('tabungan.index') }}" class="nav-link {{ request()->routeIs('tabungan.index') ? 'active' : '' }}">
                    <i class="bi bi-house-door-fill"></i> Home
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('tabungan.create') }}" class="nav-link {{ request()->routeIs('tabungan.create') ? 'active' : '' }}">
                    <i class="bi bi-plus-circle-fill"></i> Tambah Tabungan
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('menabung.create') }}" class="nav-link {{ request()->routeIs('menabung.create') ? 'active' : '' }}">
                    <i class="bi bi-wallet2"></i> Menabung
                </a>
            </li>
        </ul>
    </div>

    <div class="p-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-logout w-100">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
    </div>
</nav>
