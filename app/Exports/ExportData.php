<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Pendaftaran;
use Illuminate\Contracts\View\View;

class ExportData implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function View(): View
    {
        $data = Pendaftaran::orderBy('nama_pelatihan', 'asc')->get();
        return view('templates.table', ['pendaftarans' => $data]);
    }
}
