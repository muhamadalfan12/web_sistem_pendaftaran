<!DOCTYPE html>
<html lang="en">
@include('templates.navbar')

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tambah Pelatihan</title>
    <link rel="icon" href="{{ asset('public/storage/images/logo-kemnaker.png') }}">
</head>
<div class="content-wrapper">
    <!-- wlcme text -->
    <div class="card-body">
        <div class="classic-view">
            <article class="post">
                <div class="post-content">
                    <section class="wrapper" style="padding-bottom: 10rem">
                        <div class="container pt-8 pt-md-14">
                            <div
                                class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                                <div class="col-md-12 title-form mt-3 mb-1" id="title-form">
                                    <h1>PELATIHAN</h1>
                                </div>
                                <div class="row mb-3">
                                    <form action="{{ route('pendaftaran.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-6">
                                            <a class="btn btn-back mb-3 shadow-sm" style="background-color:gold"
                                                href="/pendaftaran">Kembali</a>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="nama_pelatihan" class="col-form-label">Nama
                                                    Pelatihan</label>
                                                <input type="text"
                                                    class="form-control shadow-sm bg-body-tertiary rounded"
                                                    id="nama_pelatihan" name="nama_pelatihan"
                                                    placeholder="Masukkan Nama Pelatihan"
                                                    onkeypress="return hanyaHurufDanSpasi(event)" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="nama_pelatih" class="col-form-label">Nama
                                                    Pelatih</label>
                                                <input type="text"
                                                    class="form-control shadow-sm bg-body-tertiary rounded"
                                                    id="nama_pelatih" name="nama_pelatih"
                                                    placeholder="Masukkan Nama Pelatih"
                                                    onkeypress="return hanyaHurufDanSpasi(event)" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="kouta_peserta" class="col-form-label">Kouta
                                                    Peserta</label>
                                                <input type="text"
                                                    class="form-control shadow-sm bg-body-tertiary rounded"
                                                    id="kouta_peserta" name="kouta_peserta"
                                                    placeholder="Masukkan Kouta Peserta"
                                                    onkeypress="return hanyaAngka(event)" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="waktu_pelatihan" class="col-form-label">Waktu
                                                    Pelatihan</label>
                                                <input type="text"
                                                    class="form-control shadow-sm bg-body-tertiary rounded"
                                                    id="waktu_pelatihan" name="waktu_pelatihan"
                                                    value="01 januari 2023 - 02 januari 2023"
                                                    placeholder="Masukkan Waktu Pelatihan" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="nomer_pelatih" class="col-form-label"> Nomer Pelatih
                                                </label>
                                                <input id="nomer_pelatih"
                                                    class="form-control shadow-sm bg-body-tertiary rounded"
                                                    type="text" id="nomer_pelatih" name="nomer_pelatih"
                                                    placeholder="Masukkan Nomor Pelatih"
                                                    onkeypress="return hanyaAngka(event)" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="jumlah_biaya" class="col-form-label">Jumlah
                                                    Biaya</label>
                                                <input class="form-control shadow-sm bg-body-tertiary rounded"
                                                    id="jumlah_biaya" name="jumlah_biaya" placeholder="Masukkan Jumlah"
                                                    required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-add mt-3 shadow-sm"
                                            style="background-color:rgb(6, 66, 247)">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </article>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
    $(function() {
        $('input[name="waktu_pelatihan"]').daterangepicker({
            showDropdowns: true,
            locale: {
                format: 'DD MMMM YYYY'
            },
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        else if (angka == 48)
            return true;
        return true;
    }
</script>
<script>
    function hanyaHurufDanSpasi(event) {
        var charCode = event.which || event.keyCode;

        // Mengecek apakah karakter yang dimasukkan adalah huruf atau spasi
        if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode === 32) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    }
</script>
<script>
    // Fungsi untuk memformat input jumlah dengan titik dan "RP"
    function formatCurrency(input) {
        // Hapus semua karakter selain angka
        var value = input.value.replace(/[^0-9]/g, '');

        // Jika value adalah string kosong, set nilai input menjadi kosong juga
        if (value === '') {
            input.value = '';
        } else {
            // Ubah nilai menjadi format uang dengan titik sebagai pemisah ribuan
            value = parseInt(value, 10).toLocaleString('id-ID');

            // Tambahkan "RP" di depan nilai yang sudah diformat
            input.value = 'Rp ' + value;
        }
    }
    // Dapatkan elemen input jumlah berdasarkan ID
    var jumlahInput = document.getElementById('jumlah_biaya');

    // Tambahkan event listener untuk memanggil fungsi formatCurrency saat nilai berubah
    jumlahInput.addEventListener('input', function() {
        formatCurrency(this);
    });
</script>
<style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    a:hover {
        color: #8ba8d9;
    }

    /* Content */

    .content-wrapper {
        padding: 2rem;
        flex-grow: 1;
        min-height: calc(100vh - 60px);
    }

    .wrapper {
        max-width: 960px;
        margin: 0 auto;
    }

    /* Form */

    form {
        margin-bottom: 2rem;
    }

    .form-control {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 0.3rem;
    }

    .btn-back {
        background-color: #82bcde;
        color: #404567;
        border-radius: 0.3rem;
    }

    .btn-back:hover {
        background-color: #5a8db6;
        color: #ffffff;
        border: 1px solid #82bcde;
    }

    .btn-add {
        background-color: #8e4761;
        color: #ffffff;
        border-radius: 0.3rem;
    }

    .btn-add:hover {
        background-color: #acdff8;
        color: #8e4761;
        border: 1px solid #8e4761
    }

    .title-form {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
    }

    .nomor {
        text-align: right;
    }

    .nomor mb-5 {
        margin-bottom: 5rem;
    }
</style>

</html>




</body>
