<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="/backend/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/backend/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/backend/assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="/backend/pages/dashboards/dashboard.html">
                    <h1 style="font-size: 20px;">Bank Sampah</h1>
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-maps">
                                <i class="ni ni-map-big text-primary"></i>
                                <span class="nav-link-text">Data Master</span>
                            </a>
                            <div class="collapse" id="navbar-maps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/admin/jenissampah" class="nav-link">Jenis Sampah</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>

                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->

                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show"
                                data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>

                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="/backend/assets/img/angga2.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>


                                <div class="dropdown-divider"></div>
                                <a href="/logout" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content -->
        @yield('content')
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/backend/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="/backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="/backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/backend/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <!-- Argon JS -->
    <script src="/backend/assets/js/argon.js?v=1.1.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="/backend/assets/js/demo.min.js"></script>
</body>

</html>
