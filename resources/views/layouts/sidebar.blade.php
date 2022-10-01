<div>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Reporting</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link pb-0" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Scools</span></a>
        </li>

        <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Teachers</span></a>
        </li>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        
        <li class="nav-item {{ request()->is('cities*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('cities.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Cities</span></a>
        </li>
        
        <li class="nav-item {{ request()->is('district*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('district.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>District</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link pb-0" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Scools</span></a>
        </li>

        <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Users</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
</div>