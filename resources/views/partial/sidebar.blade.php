<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/images/digipus-logo.png" alt="digipus logo" width="80">
        <span class="font-bold brand-text">DIGIPUS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            <div class="image">
                <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">KELOLA BUKU</li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link ">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Peminjaman
                        </p>
                    </a>
                </li>

                <li
                    class="nav-item {{ $title == 'Kategori | Dashboard' || $title == 'Buku | Dashboard' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Data Buku
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="/dashboard/buku"
                                class="nav-link {{ $title == 'Buku | Dashboard' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/kategori"
                                class="nav-link {{ $title == 'Kategori | Dashboard' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ulasan Buku</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">KELOLA AKUN</li>
                @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a href="/dashboard/user" class="nav-link {{ $title == 'User | Dashboard' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-people-arrows"></i>
                            <p>
                                Manajemen Akun
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link ">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
