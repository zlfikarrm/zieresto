<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/menu') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Menu
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/stok') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Stok
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/jenis') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Jenis
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/kategori') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Kategori
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/member') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Pelanggan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/absensi') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Absensi Karyawan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/meja') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Meja
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/transaksi" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Transaksi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>
