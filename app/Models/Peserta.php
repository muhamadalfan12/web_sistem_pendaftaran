<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    public function pelatih()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    use HasFactory;
    protected $fillable = [
        'nama_peserta'  ,
        'alamat_peserta',
        'nomer_telepon' ,
        'email_peserta' ,
        'pas_poto'      ,
        'pendaftaran_id',
    ];
}
