@include('templates.navbar')

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pendaftaran</title>
    <link rel="icon" href="{{ asset('/storage/images/logohidayatullah.png') }}">
</head>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- wlcme text -->
    <div class="text-center">
        <div class="card-body">
            <div class="classic-view">
                <article class="post">
                    <section class="pendaftaran" style="padding: 1.5rem 24px 1.5rem 24px">
                        <h1 class="text-center">
                            <img src="{{ asset('storage/images/BLKK At-taqwa.png') }}" alt="Gambar BLKK At-taqwa"
                                style="width: 120px; height: auto; margin-right: 10px;">
                            <a href="?" class="text-decoration-none" style="color: black">BLKK MULTIMEDIA
                                AT-TAQWA</a>
                        </h1>
                        <div class="input mb-2" style="padding-top: 2rem">
                            <div class="row mt-3">
                                <div class="col text-left">
                                    <a class="btn btn-primary" href="/pendaftaran/create" role="button">Tambah</a>
                                    <a href="{{ url('pendaftaran/export/excel') }}" class="btn btn-success">Export
                                        To Excel</a>
                                    {{-- <button type="button" class="btn btn-success" href="#" role="button">Export To Excel</button> --}}
                                </div>
                                <table class="mt-3 table table-hover table-striped table-bordered text-center">
                                    <thead>
                                        <tr class="bg-info">
                                            <th>No</th>
                                            <th>Nama Pelatihan</th>
                                            <th>Nama Pelatih</th>
                                            <th>Nomer Pelatih</th>
                                            <th>Waktu Pelatihan</th>
                                            <th>Jumlah Biaya</th>
                                            <th>Kouta Peserta</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendaftarans as $pendaftaran)
                                            <tr>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'" >{{ $loop->iteration }}</td>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">{{ $pendaftaran->nama_pelatihan }}</td>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">{{ $pendaftaran->nama_pelatih }}</td>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">{{ $pendaftaran->nomer_pelatih }}</td>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">{{ $pendaftaran->waktu_pelatihan }}</td>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">{{ $pendaftaran->jumlah_biaya }}</td>
                                                <td onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">{{ $pendaftaran->kouta_peserta }}</td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}"
                                                            class="btn btn-sm btn-primary">EDIT</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">HAPUS</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
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
