
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" / " target="_blank">
            <img src="{{ asset('storage/images/logo.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">SI Perpus</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    {{-- <div class="collapse  w-auto " id="sidenav-collapse-main"> --}}
    <div class="w-auto ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $active === 'index' ? 'active' : '' }}" href="/dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">MANAJEMEN</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'books' ? 'active' : '' }}" href="/dashboard/books">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Buku</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'raks' ? 'active' : '' }}" href="/dashboard/raks">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Kategori Rak Buku</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'users' ? 'active' : '' }}" href="/dashboard/users">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Petugas</span>
                </a>
            </li>
        </ul>
    </div>
</aside>