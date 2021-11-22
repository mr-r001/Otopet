<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#" class="logo">
                Admin Panel
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#" class="logo">
                {{-- <img src="{{ asset('img/logo.jpeg') }}" width="50" alt="navbar brand"> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            {{-- Data --}}
            @if (auth()->user()->isAdmin())
                <li class="{{ request()->segment(2) == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'user' ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>Data KTP</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Cetak</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->segment(2) == 'wni' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wni.index') }}">Model B-KWK</a></li>
                        <li class="{{ request()->segment(2) == 'wna' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wna.index') }}">Model B.1-KWK</a></li>
                        <li class="{{ request()->segment(2) == 'wni' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wni.index') }}">Model B.1.1-KWK</a></li>
                        <li class="{{ request()->segment(2) == 'wna' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wna.index') }}">Model B.2-KWK</a></li>
                    </ul>
                </li>
                <li class="{{ request()->segment(2) == 'user' ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>Ubah Password</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'user' ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>Hak Akses</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Data Pendukung</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->segment(2) == 'wni' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.kabupaten.index') }}">Daftar Kabupaten</a></li>
                    </ul>
                </li>
            @elseif ( auth()->user()->isLeader())
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Pemetaan</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->segment(2) == 'peta-pertahanan' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.peta-pertahanan') }}">D.IN 2</a>
                        </li>
                        <li class="{{ request()->segment(2) == 'peta_sosbud' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.peta-sosbud') }}">D.IN 3</a>
                        </li>
                        <li class="{{ request()->segment(2) == 'peta-ekonomi' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.peta-ekonomi') }}">D.IN 4</a>
                        </li>
                        <li class="{{ request()->segment(2) == 'peta-pembangunan' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.peta-pembangunan') }}">D.IN 5</a>
                        </li>
                        <li class="{{ request()->segment(2) == 'peta-teknologi' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.peta-teknologi') }}">D.IN 6</a>
                        </li>
                        <li class="{{ request()->segment(2) == 'peta-lain' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.peta-lain') }}">Lainnya</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </aside>
</div>
