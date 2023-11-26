<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Peserta;
use App\Models\Pendaftaran;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PesertaPelatihan implements FromCollection, WithHeadings
{
    protected $pendaftaranId;

    public function __construct($pendaftaranId)
    {
        $this->pendaftaranId = $pendaftaranId;
    }

    public function collection()
    {
        $data1 = Pendaftaran::find($this->pendaftaranId)
            ->select(
                'pendaftarans.nama_pelatihan',
                'pendaftarans.nama_pelatih',
                'pendaftarans.nomer_pelatih',
                'pendaftarans.waktu_pelatihan',
                'pendaftarans.jumlah_biaya',
                'pendaftarans.kouta_peserta',
            )
            ->where('id', $this->pendaftaranId)->get();

        // Ambil data peserta berdasarkan pendaftaran_id
        $data2 = Peserta::where('pendaftaran_id', $this->pendaftaranId)
            ->select(
                'pesertas.nama_peserta',
                'pesertas.alamat_peserta',
                'pesertas.nomer_telepon',
                'pesertas.email_peserta',
            )
            ->get();

        return new Collection([
            'pendaftarans' => $data1,
            'emptyRow' => [''],

            // Heading Tabel Peserta
            'headingPesertas' => [
                'Nama Peserta',
                'Alamat Peserta',
                'Nomer Telepon Peserta',
                'Email Peserta'
            ],
            'pesertas' => $data2
        ]);
    }

    public function headings(): array
    {
        return [
            // Heading Tabel Pendaftaran
            'Nama Pelatihan',
            'Nama Pelatih',
            'Nomer Pelatih',
            'Waktu Pelatihan',
            'Jumlah Biaya',
            'Kuota Peserta',
        ];
    }
}
