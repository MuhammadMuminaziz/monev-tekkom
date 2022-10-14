<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Monev Tekkom</div>
        </a>

       
        @can('owner')
         <!-- Divider -->
         <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
                Dashboard
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        
         <!-- Divider -->
         <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Report
        </div>

        <!-- Nav Item - Report -->
        <li class="nav-item {{ request()->is('reporting*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('reporting.index') }}">
                <i class="fas fa-school"></i>
                <span>Laporan Data</span></a>
        </li>
        {{-- <li class="nav-item {{ request()->is('reporting*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('reporting.index') }}">
                <i class="fas fa-user-graduate"></i>
                <span>Laporan Data Guru</span></a>
        </li> --}}

        @endcan

        @can('operator')
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Master Data
        </div>

        <li class="nav-item {{ request()->is('schools*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('schools.index') }}">
            <i class="fas fa-school"></i>
                <span>Data Sekolah</span></a>
        </li>

        <li class="nav-item {{ request()->is('teachers*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('teachers.index') }}">
            <i class="fas fa-user-graduate"></i>
                <span>Data guru</span></a>
        </li>
        @endcan
        
        @can('super_admin')
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Master Data
        </div>
        
        <li class="nav-item {{ request()->is('cities*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('cities.index') }}">
            <i class="fas fa-city"></i>
                <span>Data Kota</span></a>
        </li>
        
        <li class="nav-item {{ request()->is('district*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('district.index') }}">
            <i class="fas fa-cube"></i>
                <span>Data Kecamatan</span></a>
        </li>

        <li class="nav-item {{ request()->is('school*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('school.index') }}">
                <i class="fas fa-school"></i>
                <span>Data Sekolah</span></a>
        </li>

        <li class="nav-item {{ request()->is('periode*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('periode.index') }}">
            <i class="fas fa-tasks"></i>
                <span>Periode Aktif</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Users
        </div>
        <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-users"></i>
                <span>Data User</span></a>
        </li>
        
        @endcan

        @can('verifikator')
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Master Data
        </div>

        <li class="nav-item {{ request()->is('schools*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="{{ route('verifikator.schools') }}">
                <i class="fas fa-school"></i>
                <span>Data Sekolah</span></a>
        </li>

        <li class="nav-item {{ request()->is('teachers*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('verifikator.teachers') }}">
            <i class="fas fa-user-graduate"></i>
                <span>Data Guru</span></a>
        </li>
        @endcan

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
</div>