@include('templates.navbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- wlcme text -->
    <div class="text-center">
        <div class="card-body">
            <div class="classic-view">
                <article class="post">
                    <img src="{{ asset('storage/images/BLKK At-taqwa.png') }}" alt="Welcome Image"
                        class="rounded mx-auto d-block" style="width: 200px; height: 200px;">
                    <h2 class="text-uppercase">Visi</h2>
                    <p class="lead">Mengembangkan Pelatihan Berbasis Kompetensi Menuju Masyarakat Terampil dan
                        Mandiri.
                    </p>
                    <hr>
                    <h2 class="text-uppercase">Misi</h2>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check mr-2"></i>Menyelenggarakan Pelatihan Berbasis Kompetensi
                        </li>
                        <li><i class="fas fa-check mr-2"></i>Menyelenggarakan Pelatihan Kerja Sesuai Dengan Kebutuhan
                            Industri
                        </li>
                        <li><i class="fas fa-check mr-2"></i>Menyiapkan Tenaga Kerja Yang Terampil, Mandiri Dan Memiliki
                            Kompetensi Sesuai SKKNI</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('lte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('lte') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('lte') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('lte') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('lte') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('lte') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('lte') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('lte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('lte') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('lte') }}/dist/js/pages/dashboard.js"></script>
