<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @hasanyrole('admin|user')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        @role('admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Master Pengguna</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('presence.index') }}">
                <i class="mdi mdi-calendar-text menu-icon"></i>
                <span class="menu-title">Histori Presensi</span>
            </a>
        </li>
        @endrole
        @role('user')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('presence.create') }}">
                <i class="mdi mdi-format-align-justify menu-icon"></i>
                <span class="menu-title">PresensiKu</span>
            </a>
        </li>
        @endrole
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Keluar</span>
            </a>
        </li>
        @endrole
        
    </ul>
</nav>