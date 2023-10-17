<table class="mt-3 table table-hover table-drak text-center">
    <thead>
        <tr class="bg-info">
            <th>No</th>
            <th>Nama Pelatihan</th>
            <th>Nama Pelatih</th>
            <th>Nomer Pelatih</th>
            <th>Waktu Pelatihan</th>
            <th>Jumlah Biaya</th>
            <th>Kouta Peserta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pendaftarans as $pendaftaran)
    <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $pendaftaran->nama_pelatihan }}</td>
    <td>{{ $pendaftaran->nama_pelatih }}</td>
    <td>{{ $pendaftaran->nomer_pelatih }}</td>
    <td>{{ $pendaftaran->waktu_pelatihan }}</td>
    <td>{{ $pendaftaran->jumlah_biaya }}</td>
    <td>{{ $pendaftaran->kouta_peserta }}</td>
    </tr>
    @endforeach
    </tbody>
</table>