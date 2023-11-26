<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Detail Pelatih</title>
    <link rel="icon" href="{{ asset('/storage/images/logohidayatullah.png') }}">
</head>

<body>
    <div class="content-wrapper">
        <section class="wrapper" style="padding-bottom: 10rem">
            <div class="container pt-8 pt-md-14">
                <div class="col">
                    <a class="btn btn-back mb-3 shadow-sm" style="background-color:gold" href="/pendaftaran">Kembali</a>
                </div>
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                    <div class="col-md-12 title-form mt-3 mb-1 text-center" id="title-form">
                        <h2>PELATIHAN</h2>

                        <table class="table table-striped text-start">
                            <thead>
                                <tr>
                                    <h2 class="text-start">Detail Pelatihan</h2>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">Nama Pelatihan</th>
                                    <td>:</td>
                                    <td>{{ $pendaftaran->nama_pelatihan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Pelatih</th>
                                    <td>:</td>
                                    <td>{{ $pendaftaran->nama_pelatih }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomer Pelatih</th>
                                    <td>:</td>
                                    <td>{{ $pendaftaran->nomer_pelatih }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Waktu Pelatihan</th>
                                    <td>:</td>
                                    <td>{{ $pendaftaran->waktu_pelatihan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Biaya</th>
                                    <td>:</td>
                                    <td>{{ $pendaftaran->jumlah_biaya }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kouta Peserta</th>
                                    <td>:</td>
                                    <td>{{ $pendaftaran->kouta_peserta }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex flex-row mb-3">
                            <div class="p-2">
                                <h2 class="text-start">Detail Peserta</h2>
                            </div>
                            <div class="p-2"> <a class="btn btn-primary"
                                    href="{{ route('peserta.create', [$pendaftaran->id]) }}" role="button">Tambah</a>
                                    <a href="{{ url('/peserta-pelatihan/export/excel', [$pendaftaran->id]) }}" class="btn btn-success">Export To Excel</a>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered text-center ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Peserta</th>
                                    <th scope="col">Alamat Peserta</th>
                                    <th scope="col">Nomer Telepon</th>
                                    <th scope="col">Email Peserta</th>
                                    <th scope="col">Pas Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($pendaftaran->pesertas as $peserta)
                                    <tr onclick="window.location.href='{{ route('peserta.show', $peserta->id) }}'">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $peserta->nama_peserta }}</td>
                                        <td>{{ $peserta->alamat_peserta }}</td>
                                        <td>{{ $peserta->nomer_telepon }}</td>
                                        <td>{{ $peserta->email_peserta }}</td>
                                        <td class="text-center">
                                            <img src="{{ Storage::url('public/peserta/') . $peserta->pas_poto }}"
                                                class="rounded" style="width: 150px">
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('peserta.destroy', $peserta->id) }}" method="POST">
                                                <a href="{{ route('peserta.edit', $peserta->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>















<style>
    .content-wrapper {
        padding: 2rem;
        flex-grow: 1;
        min-height: calc(100vh - 60px);
    }
</style>

</html>
