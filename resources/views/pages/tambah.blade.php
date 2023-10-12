<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tambah Peserta</title>
    <link rel="icon" href="{{ asset('public/storage/images/logo-kemnaker.png') }}">
</head>

<body>

    <div class="content-wrapper">
        <section class="wrapper" style="padding-bottom: 10rem">
            <div class="container pt-8 pt-md-14">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                    <div class="col-md-12 title-form mt-3 mb-1" id="title-form">
                        <h1>TAMBAH PESERTA</h1>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <a class="btn btn-back mb-3 shadow-sm" href="/pendaftaran">Kembali</a>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="nama_lengkap" class="col-form-label">Nama Lengkap Peserta</label>
                                <input type="text" class="form-control shadow-sm bg-body-tertiary rounded" id="nama_lengkap" name="nama_lengkap"
                                    placeholder="Masukkan Nama Lengkap Peserta"
                                    onkeypress="return hanyaHurufDanSpasi(event)" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="nama_pelatih" class="col-form-label">Nama Pelatih</label>
                                <input type="text" class="form-control shadow-sm bg-body-tertiary rounded" id="nama_pelatih" name="nama_pelatih"
                                    placeholder="Masukkan Nama Pelatih"
                                    onkeypress="return hanyaHurufDanSpasi(event)" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="alamat" class="col-form-label">Alamat Peserta</label>
                                <input type="text" class="form-control shadow-sm bg-body-tertiary rounded" id="alamat" name="alamat"
                                    placeholder="Masukkan Alamat Peserta" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="waktu_pelatihan" class="col-form-label">Waktu Pelatihan</label>
                                <input class="form-control shadow-sm bg-body-tertiary rounded" id="waktu_pelatihan" name="waktu_pelatihan"
                                    placeholder="Masukkan Waktu Pelatihan" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="no_hp" class="col-form-label"> No. HP </label>
                                <input id="no_hp" class="form-control shadow-sm bg-body-tertiary rounded" type="text" id="no_hp"
                                    name="no_hp" placeholder="Masukkan Nomor HP"
                                    onkeypress="return hanyaAngka(event)" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="pelatihan" class="col-form-label">Pelatihan</label>
                                <select class="form-select p-2 shadow-sm bg-body-tertiary rounded" id="pelatihan" name="pelatihan" required>
                                    <option value="UI/UX">UI/UX</option>
                                    <option value="POTOSHOP">POTOSHOP</option>
                                    <option value="KOMPUTER">KOMPUTER</option>
                                    <option value="NGODING">NGODING</option>
                                </select>
                            </div>
                        </div>
                        <div class="container mb-3">
                            <label for="pembayaran" class="col-form-label">Pembayaran</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="booking"
                                                name="pembayaran[]" value="Booking">
                                            <label class="form-check-label" for="booking">Booking</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="dp"
                                                name="pembayaran[]" value="DP">
                                            <label class="form-check-label" for="dp">DP</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="cbth"
                                                name="pembayaran[]" value="CBTH">
                                            <label class="form-check-label" for="cbth">CBTH</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="angsuran"
                                                name="pembayaran[]" value="Angsuran ke">
                                            <label class="form-check-label" for="angsuran">Angsuran ke</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="ket"
                                                name="pembayaran[]" value="KET">
                                            <label class="form-check-label" for="ket">KET</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lainlain"
                                                name="pembayaran[]" value="Lain-lain">
                                            <label class="form-check-label" for="lainlain">Lain-lain</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3" id="keteranganRow" style="display: none;">
                            <div class="col-sm-12">
                                <label for="keterangan" class="col-form-label">Keterangan Lainnya</label>
                                <input class="form-control" id="keterangan" name="keterangan"
                                    placeholder="Masukkan keterangan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="terbilang" class="col-form-label">Terbilang</label>
                                <input class="form-control shadow-sm bg-body-tertiary rounded" id="terbilang" name="terbilang"
                                    placeholder="Masukkan Terbilang" onkeypress="return hanyaHurufDanSpasi(event)"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="jumlah" class="col-form-label">Jumlah</label>
                                <input class="form-control shadow-sm bg-body-tertiary rounded" id="jumlah" name="jumlah"
                                    placeholder="Masukkan Jumlah" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-add mt-3 shadow-sm">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@extends('templates.footer')
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
    // Dapatkan elemen checkbox "Lain-lain" berdasarkan ID
    var lainlainCheckbox = document.getElementById('lainlain');

    // Dapatkan elemen row "keterangan" berdasarkan ID
    var keteranganRow = document.getElementById('keteranganRow');

    // Tambahkan event listener ke checkbox "Lain-lain"
    lainlainCheckbox.addEventListener('change', function() {
        // Jika checkbox "Lain-lain" dicentang, tampilkan input "keterangan"
        if (this.checked) {
            keteranganRow.style.display = 'block';
        } else {
            // Jika checkbox "Lain-lain" tidak dicentang, sembunyikan input "keterangan" dan hapus isinya
            keteranganRow.style.display = 'none';
            document.getElementById('keterangan').value = '';
        }
    });
</script>
<script>
    var angsuranCheckbox = document.getElementById('angsuran');

    var keteranganRow = document.getElementById('keteranganRow');

    angsuranCheckbox.addEventListener('change', function() {
        if (this.checked) {
            keteranganRow.style.display = 'block';
        } else {
            keteranganRow.style.display = 'none';
            document.getElementById('keterangan').value = '';
        }
    });
</script>
<script>
    // Dapatkan semua elemen checkbox
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Tambahkan event listener untuk setiap checkbox
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Jika checkbox yang sedang diubah adalah checkbox yang telah dicentang, nonaktifkan yang lainnya
            if (this.checked) {
                checkboxes.forEach(function(otherCheckbox) {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.disabled = true;
                    }
                });
            } else {
                // Jika checkbox yang sedang diubah tidak dicentang, aktifkan yang lainnya
                checkboxes.forEach(function(otherCheckbox) {
                    otherCheckbox.disabled = false;
                });
            }
        });
    });
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
    var jumlahInput = document.getElementById('jumlah');

    // Tambahkan event listener untuk memanggil fungsi formatCurrency saat nilai berubah
    jumlahInput.addEventListener('input', function() {
        formatCurrency(this);
    });
</script>
</body>
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

.btn-add{
    background-color: #8e4761;
    color: #ffffff;
    border-radius: 0.3rem;
}

.btn-add:hover{
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