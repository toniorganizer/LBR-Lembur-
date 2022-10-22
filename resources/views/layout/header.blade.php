 @section('header')
 
 <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png"
                                        alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png"
                                        alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">


                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">

                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                    <div class="px-2 pt-2">
                                    </div>
                                </div>

                                <div class="tab-content" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                    </div>
                                </div>
                                <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                    aria-labelledby="messages-tab">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <div class="text-reset notification-item d-block dropdown-item">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{auth()->user()->name}}</span>
                                    <span
                                        class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">
                                        @if (auth()->user()->role == 1)
                                            Employee
                                        @else
                                            Administrator
                                        @endif
                                        </span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                        <h6 class="dropdown-header">{{auth()->user()->name}}</h6>
                            <a class="dropdown-item"
                                href="#"> <span
                                    class="align-middle">Profile</span></a>
                                <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item"> 
                                    <span class="align-middle" data-key="t-logout">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                
                <span class="logo-lg mt-n5">
                    <h1>LBR</h1>
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt=""
                        height="17">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    @if (auth()->user()->role == 1)
                        <li class="nav-item">
                        <a class="nav-link menu-link {{($title === "Dashboard") ? 'active' : ''}}" href="/employee">
                                <i data-feather="home" class="icon-dual"></i> <span data-key="home">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menu-link {{($title === "Halaman Tambah Durasi Lembur" ? 'active' : '')}}" href="/durasiLembur">
                                <i data-feather="database" class="icon-dual"></i> <span data-key="home">Tambah data lembur</span>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menu-link {{($title === "Halaman bonus lembur" ? 'active' : '')}}" href="/bonusLembur">
                                <i data-feather="database" class="icon-dual"></i> <span data-key="home">Bonus Lembur</span>
                            </a>
                        </li>
                    @else
                    <li class="nav-item">
                    <a class="nav-link menu-link {{($title === "Dashboard") ? 'active' : ''}}" href="/employee">
                            <i data-feather="home" class="icon-dual"></i> <span data-key="home">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link menu-link {{($title === "Halaman data pegawai" ? 'active' : '')}}" href="/dataPegawai">
                            <i data-feather="database" class="icon-dual"></i> <span data-key="home">Data Pegawai</span>
                        </a>
                    </li>
                    @endif
                        
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    @endsection