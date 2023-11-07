<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pendaftaran</title>
    <link rel="icon" href="{{ asset('/storage/images/logohidayatullah.png') }}">
</head>

<body>
    <section class="pendaftaran" style="padding: 1.5rem 24px 1.5rem 24px">
        <h1 class="text-center">
            <img src="{{ asset('storage/images/BLKK At-taqwa.jpg') }}" alt="Gambar BLKK At-taqwa" style="width: 100px; height: auto; margin-right: 10px;">
            <a href="?" class="text-decoration-none" style="color: black" >BLKK MULTIMEDIA AT-TAQWA</a>
        </h1>
        <div class="input mb-2" style="padding-top: 2rem">
            <div class="row mt-3">
                <div class="col">
                    <a class="btn btn-primary" href="/pendaftaran/create" role="button">Tambah</a>
                    <a href="{{ url('pendaftaran/export/excel') }}" class="btn btn-success">Export To Excel</a>
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
                            <tr onclick="window.location.href='{{ route('pendaftaran.show', $pendaftaran->id) }}'">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pendaftaran->nama_pelatihan }}</td>
                                <td>{{ $pendaftaran->nama_pelatih }}</td>
                                <td>{{ $pendaftaran->nomer_pelatih }}</td>
                                <td>{{ $pendaftaran->waktu_pelatihan }}</td>
                                <td>{{ $pendaftaran->jumlah_biaya }}</td>
                                <td>{{ $pendaftaran->kouta_peserta }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST">
                                        <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}"
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

    </section>
    @extends('templates.footer')
</body>
<style>
    .pendaftaran {
        flex-grow: 1;
        min-height: calc(100vh - 60px);
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>
