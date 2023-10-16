<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Models\User;

class Pendaftaran extends Model
{
    protected $table = 'tabel_pendaftaran'; // Gantilah 'nama_tabel_pendaftaran' sesuai dengan nama tabel Anda

    protected $fillable = [
        'nama_pelatihan',
        'nama_pelatih',
        'nomer_pelatih',
        'waktu_pelatihan',
        'jumlah_biaya',
        'kouta_peserta',
    ];

    // Jika ada relasi dengan model lain, Anda dapat mendefinisikannya di sini.
}
