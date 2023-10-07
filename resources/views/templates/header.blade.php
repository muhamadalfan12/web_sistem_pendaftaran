<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>
        BLKK MULTIMEDIA CIREBON
    </title>


    <link rel="shortcut icon"
        href="https://w1.pngwing.com/pngs/823/446/png-transparent-java-logo-cirebon-bekasi-regency-kpu-kabupaten-cirebon-cirebon-regency-symbol-education-sri-baduga-maharaja-west-java.png" />


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desa Sindangjawa" name="keywords">
    <meta content="Sindangjawa adalah desa di kecamatan Dukupuntang, Cirebon, Jawa Barat, Indonesia."
        name="description">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/sistem_informasi_desa/resources/assets/css/landingcss/plugins.css">
    <link rel="stylesheet" href="http://localhost/sistem_informasi_desa/resources/assets/css/landingcss/style.css">
    <link rel="preload" href="http://localhost/sistem_informasi_desa/resources/assets/css/landingcss/fonts/dm.css"
        as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <style>
        img.lazy {
            background: #F1F1FA;
            width: 100%;
            height: 30%;
            display: block;
            margin: 0;
            border: 0;
        }
    </style>

</head>
<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="/" class="nav-title">
                    <img class="tdb-logo-img" src="https://hidayatullah.or.id/wp-content/uploads/2023/03/Hidayatullah.or_.id_.png" alt="Logo" title="" width="330" height="70">
                </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="https://localhost/sistem_informasi_desa/resources/views/welcome.blade.php"><img
                            src="https://hidayatullah.or.id/wp-content/uploads/2023/03/Hidayatullah.or_.id_.png"
                            alt="SMKN 1 Depok" /></a>
                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                        aria-label="Close"></button>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                            href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('pemerintahandesa') ? 'active' : '' }}"
                            href="/pemerintahandesa">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('pengumuman*') ? 'active' : '' }}"
                            href="/pengumuman">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}"
                            href="/galeri">Galeri</a></li>

                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-90 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger"><button class="hamburger animate plain"
                                data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
