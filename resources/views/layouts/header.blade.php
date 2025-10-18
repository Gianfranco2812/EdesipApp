<div class="main-header">
    <div class="main-header-logo">
        <div class="logo-header" data-background-color="white">

            <a href="index.html" class="logo">
                <img src="{{ asset('kaiadmin/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand" height="20" />
            </a>

            <div>
                <button class="btn btn-toggle toggle-sidebar" style="background-color: black">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
        </div>
        </div>

    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ms-auto align-items: center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{ asset('kaiadmin/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle" />
                        </div>
                        <span class="profile-username">
                            <span class="op-7">Hola,</span>
                            <span class="fw-bold">Hizrian</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>