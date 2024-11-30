<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets_admin') }}/img/kaiadmin/logo_light.svg" alt="navbar brand"
                            class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="/" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Administration</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#paymentLayouts">
                                <i class="fas fa-th-list"></i>
                                <p>Payment</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="paymentLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="payment/payment">
                                            <span class="sub-item">Payment</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="payment/history">
                                            <span class="sub-item">History</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Navigation</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#courseLayout">
                                <i class="fas fa-layer-group"></i>
                                <p>My Course</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="courseLayout">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="components/avatars.html">
                                            <span class="sub-item">Avatars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/buttons.html">
                                            <span class="sub-item">Buttons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas fa-th-list"></i>
                                <p>Sidebar Layouts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="sidebar-style-2.html">
                                            <span class="sub-item">Sidebar Style 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="icon-menu.html">
                                            <span class="sub-item">Icon Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Setting</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#">
                                <i class="fas fa-th-list"></i>
                                <p>Setting</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
