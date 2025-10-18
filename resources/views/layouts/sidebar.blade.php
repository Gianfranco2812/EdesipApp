<div class="sidebar" data-background-color="white">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="white">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('kaiadmin/img/edesip/edesip.png') }}" alt="navbar brand" class="navbar-brand" height="40">
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                {{-- HOME --}}
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-home"></i>
                        <p color="red">Home</p>
                    </a>
                </li>

                {{-- ADMINISTRACIÓN --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon"><i class="fas fa-cog"></i></span>
                    <h4 class="text-section">ADMINISTRACIÓN</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.roles') ? 'active' : '' }}">
                    <a href="{{ route('admin.roles') }}">
                        <i class="fas fa-user-shield"></i>
                        <p>Roles y Permisos</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                    <a href="{{ route('admin.users') }}">
                        <i class="fas fa-users"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.cursos') ? 'active' : '' }}">
                    <a href="{{ route('admin.cursos') }}">
                        <i class="fas fa-book"></i>
                        <p>Cursos</p>
                    </a>
                </li>

                {{-- FINANZAS --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon"><i class="fas fa-dollar-sign"></i></span>
                    <h4 class="text-section">FINANZAS</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('finance.clientes') ? 'active' : '' }}">
                    <a href="{{ route('finance.clientes') }}">
                        <i class="fas fa-user-tie"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('finance.ventas') ? 'active' : '' }}">
                    <a href="{{ route('finance.ventas') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('finance.cobranzas') ? 'active' : '' }}">
                    <a href="{{ route('finance.cobranzas') }}">
                        <i class="fas fa-hand-holding-usd"></i>
                        <p>Cobranzas</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('finance.pagos') ? 'active' : '' }}">
                    <a href="{{ route('finance.pagos') }}">
                        <i class="fas fa-credit-card"></i>
                        <p>Pagos</p>
                    </a>
                </li>

                {{-- REPORTES --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon"><i class="fas fa-chart-bar"></i></span>
                    <h4 class="text-section">REPORTES</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('reports.report-pagos') ? 'active' : '' }}">
                    <a href="{{ route('reports.report-pagos') }}">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>Reporte de Pagos</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('reports.reportes') ? 'active' : '' }}">
                    <a href="{{ route('reports.reportes') }}">
                        <i class="fas fa-chart-pie"></i>
                        <p>Reportes</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
