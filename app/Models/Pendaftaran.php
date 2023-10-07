<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Models\User;

class Pendaftaran extends Model
{
    protected $table = 'tabel_pendaftaran'; // Gantilah 'nama_tabel_pendaftaran' sesuai dengan nama tabel Anda

    protected $fillable = [
        'nama_pelatihan', 
        'waktu_pelatihan', 
        'biaya', 
        'kouta_peserta', 
        'nama_pelatih', 
        'email', 
        'no_pelatih'
    ];

    // Jika ada relasi dengan model lain, Anda dapat mendefinisikannya di sini.
}
