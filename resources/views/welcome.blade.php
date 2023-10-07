@include('templates.header')

<body>
    <div class="content-wrapper">
        <section class="wrapper bg-light">
            <div class="container pt-8 pt-md-14">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                        <div class="shape bg-dot orange rellax w-17 h-19" data-rellax-speed="1"
                            style="top: -1.7rem; left: -1.5rem;"></div>
                        <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                        <figure class="rounded"><img class="lazyimage"
                                data-lazyimg="{{ asset('/storage/images/blk-hidayatullah-cirebon3.jpeg') }}" alt="BLKK Cirebon" />
                        </figure>
                    </div>
                    <!-- wlcme text -->
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 mt-lg-n2 text-center text-lg-start order-2 order-lg-0"
                        data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Selamat Datang Di BLKK Multimedia <br /><span
                                class="typer text-primary text-nowrap" data-delay="100"
                                data-words="Harjamukti,Cirebon,Jawa Barat,Indonesia"></span><span
                                class="cursor text-orange" data-owner="typer"></span></h1>
                        <p class="lead fs-lg mb-7">Balai Latihan Kerja Komunitas Hidayatullah melakukan kegiatan Pelatihan Multimedia di kecamatan Harjamukti, Cirebon, Jawa Barat, Indonesia.</p>

                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                            data-group="page-title-buttons" data-delay="900">
                            <span><a href="#about" class="btn btn-lg btn-primary rounded-pill me-2">Mulai
                                    Jelajahi</a></span>
                        </div>
                    </div>
                </div>

                <!-- pengenalan -->
                <div class="container" id="about">
                    <!-- tentang BLKK Cirebon -->
                    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-10">
                        <div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
                            <!-- <a href="https://vimeo.com/374265101" class="btn btn-circle btn-orange btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a> -->
                            <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                                style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                            <figure class="rounded"><img class="lazyimage"
                                    data-lazyimg="{{ asset('/storage/images/blk-hidayatullah-cirebon2.jpeg') }}" alt="BLKK Cirebon"
                                    loading="lazy"></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 offset-lg-1">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Siapa Kami?</h2>
                            <h3 class="display-4 mb-6">Tentang BLKK Multimedia Cirebon</h3>
                        </div>

                        <!-- Pengumuman -->
                    <section class="wrapper bg-light angled upper-end">
                        <div class="container py-14 py-md-16">
                            <div class="row">
                                <div class="col-lg-9 col-xl-8 col-xxl-7">
                                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Pengumuman</h2>
                                    <a href="">
                                        <h3 class="display-4 mb-9">Pengumuman Terbaru BLKK Cirebon</h3>
                                    </a>
                                </div>
                            </div>

    </div>
    
</body>
@extends('templates.footer')