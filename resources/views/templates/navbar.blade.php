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

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('storage/images/BLKK At-taqwa.png') }}" class="nav-logo" alt="">
                    </div>
                    <div class="info">
                        <a class="light">ADMIN</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item {{ Request::is('visimisi*', 'sejarah*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('visimisi*', 'sejarah*') ? 'active' : '' }}">
                                <i class="fas fa-user mr-1"></i>
                                <p>
                                    Profile
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/visimisi"
                                        class="nav-link {{ Request::is('visimisi*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Visi Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/sejarah" class="nav-link {{ Request::is('sejarah*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sejarah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="/pendaftaran" class="nav-link {{ Request::is('pendaftaran*') ? 'active' : '' }}">
                                <i class="fas fa-clipboard-list mr-1"></i>
                                <p>
                                    Pendaftaran
                                </p>
                            </a>
                        </li>

                        <li class="nav-item menu">
                            <a href="/struktur" class="nav-link {{ Request::is('struktur*') ? 'active' : '' }}">
                                <i class="fas fa-university mr-1"></i>
                                <p>
                                    Struktur Organisasi
                                </p>
                            </a>
                        </li>
                    </ul><!-- /.sidebar-menu -->
                </nav>

            </div>
            <div class="sidebar-bottom">
                <!-- Konten sidebar bottom -->
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Tombol keluar -->
                    <li class="nav-item">
                        <a href="/logout" class="nav-divider">
                            <button style="font-size: 18px" class="btn btn-md text-white btn-keluar">Keluar
                                <i class="fas fa-sign-out-alt"></i></button>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>

    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        if (window.location.pathname === '/pendaftaran/create') {
            $('.navbar-nav').hide(); // menyembunyikan tombol "Keluar"
        }
    });
</script>
<style>
    .btn-keluar:hover {
        text-decoration: underline;
        cursor: pointer;
    }
</style>
