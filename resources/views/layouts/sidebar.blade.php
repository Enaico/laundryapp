<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/home">LAUNDRY</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/home">LD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="nav-item {{ Nav::isRoute('home') }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <li class="menu-header">Master Data</li>
            @if (Auth::user()->role=='admin')
            <li class="nav-item {{ Nav::isRoute('basic.index') }}">
                <a class="nav-link" href="{{ route('basic.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>{{ __('Pengguna') }}</span>
                </a>
            </li>

            <li class="nav-item {{ Nav::isRoute('member.index') }}">
                <a class="nav-link" href="{{ route('member.index') }}">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>{{ __('Membership') }}</span>
                </a>
            </li>

            <li class="nav-item {{ Nav::isRoute('paket.index') }}">
                <a class="nav-link" href="{{ route('paket.index') }}">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>{{ __('Paket') }}</span>
                </a>
            </li>

            <li class="nav-item {{ Nav::isRoute('outlet.index') }}">
                <a class="nav-link" href="{{ route('outlet.index') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>{{ __('Outlet') }}</span>
                </a>
            </li>

            <li class="nav-item {{ Nav::isRoute('transaksi.index') }}">
                <a class="nav-link" href="{{ route('transaksi.index') }}">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>{{ __('Transaksi') }}</span>
                </a>
            </li>
            @endif

            <li class="menu-header">Profile</li>
            @if (Auth::user()->role=='kasir')
            <li class="nav-item {{ Nav::isRoute('member.index') }}">
                <a class="nav-link" href="{{ route('member.index') }}">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>{{ __('Membership') }}</span>
                </a>
            </li>
            <li class="nav-item {{ Nav::isRoute('transaksi.index') }}">
                <a class="nav-link" href="{{ route('transaksi.index') }}">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>{{ __('Transaksi') }}</span>
                </a>
            </li>
            @endif
            <li class="nav-item {{ Nav::isRoute('profile') }}">
                <a class="nav-link" href="{{ route('profile') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>{{ __('Profile') }}</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
