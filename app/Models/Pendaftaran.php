<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelatihan',
        'nama_pelatih',
        'nomer_pelatih',
        'waktu_pelatihan',
        'jumlah_biaya',
        'kouta_peserta',
    ];
}
