<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Pendaftaran;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportData implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            // Heading Tabel Pendaftaran
            'Nama Pelatihan',
            'Nama Pelatih',
            'Nomer Pelatih',
            'Waktu Pelatihan',
            'Jumlah Biaya',

            // Heading Tabel Peserta
            'Nama Peserta',
            'Alamat Peserta',
            'Nomer Telepon Peserta',
            'Email Peserta'
        ];
    }

    public function collection()
    {
        // Ambil data pelatihan beserta peserta menggunakan leftJoin
        $data = Pendaftaran::join('pesertas', 'pendaftarans.id', '=', 'pesertas.pendaftaran_id')
            ->orderBy('pendaftarans.nama_pelatihan', 'asc')
            ->select(
                // Data Tabel Pendaftaran
                'pendaftarans.nama_pelatihan',
                'pendaftarans.nama_pelatih',
                'pendaftarans.nomer_pelatih',
                'pendaftarans.waktu_pelatihan',
                'pendaftarans.jumlah_biaya',

                // Data Tabel Peserta
                'pesertas.nama_peserta',
                'pesertas.alamat_peserta',
                'pesertas.nomer_telepon',
                'pesertas.email_peserta',
            )
            ->get();

        return $data;
    }
}
