<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><img src="{{ asset('dist/img/earth.png') }}" alt="logo" width="50"
                class="shadow-light rounded-circle"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="{{ asset('dist/img/earth.png') }}" alt="logo" width="30"
                class="shadow-light rounded-circle"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ (request()->is('dashboard') || request()->is('catatan-perjalanan') || request()->is('input-dashboard') ) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a class="nav-link" href="/dashboard">General Dashboard</a></li>
                    <li class="{{ (request()->is('catatan-perjalanan')) ? 'active' : '' }}"><a class="nav-link" href="/catatan-perjalanan">Catatan Perjalanan</a></li>
                    <li class="{{ (request()->is('input-dashboard')) ? 'active' : '' }}"><a class="nav-link" href="/input-dashboard">Input Perjalanan</a></li>
                </ul>
            </li>
        </ul>
    </aside>
  </div>
