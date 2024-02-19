<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('lte') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <a class="navbar-brand" href="admin">BLKK Multimedia At-Taqwa</a>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <a href="/logout"><button style='font-size:18px' class="btn btn-md btn-link">Keluar <i
                            class='fas fa-sign-out-alt'></i></button></a>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://w1.pngwing.com/pngs/823/446/png-transparent-java-logo-cirebon-bekasi-regency-kpu-kabupaten-cirebon-cirebon-regency-symbol-education-sri-baduga-maharaja-west-java.png"
                            class="nav-logo" alt="">
                    </div>
                    <div class="info">
                        <a href="admin" class="d-block">BLKK Multimedia At-Taqwa</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li
                            class="nav-item {{ Request::is('updatevisimisi*', 'updatesejarah*', 'updatekepaladesa*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('updatevisimisi*', 'updatesejarah*', 'updatekepaladesa*') ? 'active' : '' }}">
                                <i class="fas fa-university"></i>
                                <p>
                                    Profile
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/updatevisimisi"
                                        class="nav-link {{ Request::is('updatevisimisi*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Visi Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/updatesejarah"
                                        class="nav-link {{ Request::is('updatesejarah*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sejarah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item {{ Request::is('updategeografis*', 'updatedemografis*', 'updateekonomi*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('updategeografis*', 'updatedemografis*', 'updateekonomi*') ? 'active' : '' }}">
                                <i class="fas fa-scroll"></i>
                                <p>
                                    Pendaftaran
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/updategeografis"
                                        class="nav-link {{ Request::is('updategeografis*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pelatihan</p>
                                    </a>
                                </li>

                        <li class="nav-item menu {{ Request::is('updatepkk*', 'updatekartun*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('updatepkk*', 'updatekartun*') ? 'active' : '' }}">
                                <i class="fas fa-table"></i>
                                <p>
                                    Lembaga
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/updatepkk"
                                        class="nav-link {{ Request::is('updatepkk*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Struktur Organisasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
</body>

</html>
