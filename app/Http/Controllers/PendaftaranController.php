<?php

namespace App\Http\Controllers;

use App\Exports\ExportData;
use App\Models\Pendaftaran;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PendaftaranController extends Controller
{
    protected $pendaftarans;
    public function __construct()
    {
        $this->pendaftarans = Pendaftaran::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Filter Kwitansi berdasarkan pencarian
        $pendaftarans = pendaftaran::where(function ($query) use ($search) {
            $query
                ->where('nama_pelatihan', 'LIKE', '%' . $search . '%')
                ->orWhere('nama_pelatih', 'LIKE', '%' . $search . '%')
                ->orWhere('nomer_pelatih', 'LIKE', '%' . $search . '%')
                ->orWhere('waktu_pelatihan', 'LIKE', '%' . $search . '%')
                ->orWhere('jumlah_biaya', 'LIKE', '%' . $search . '%')
                ->orWhere('kouta_peserta', 'LIKE', '%' . $search . '%');
        })->get();

        // if ($pendaftarans->count() == 0) {
        //     session()->flash('error', 'pendaftaran tidak ditemukan');
        //     return redirect('/pendaftaran');
        // }

        return view('pages.pendaftaran', [
            'pendaftarans' => $pendaftarans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pelatihan' => 'required',
            'nama_pelatih' => 'required',
            'nomer_pelatih' => 'required',
            'waktu_pelatihan' => 'required',
            'jumlah_biaya' => 'required',
            'kouta_peserta' => 'required',
        ]);

        $pendaftaran = Pendaftaran::create([
            'nama_pelatihan'  => $request->nama_pelatihan,
            'nama_pelatih'    => $request->nama_pelatih,
            'nomer_pelatih'   => $request->nomer_pelatih,
            'waktu_pelatihan' => $request->waktu_pelatihan,
            'jumlah_biaya'    => $request->jumlah_biaya,
            'kouta_peserta'   => $request->kouta_peserta,
        ]);

        if ($pendaftaran) {
            //redirect dengan pesan sukses
            return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pendaftaran.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::find($id); // Menggantilah $id dengan ID pendaftaran yang diinginkan
        $pesertas = $pendaftaran->pesertas;
        if (!$pendaftaran) {
            session()->flash('error', 'Pelatihan tidak ditemukan');
            return redirect()->route('pendaftaran.index');
        }

        $search = $request->input('search');


        $pesertas = Peserta::where(function ($query) use ($search) {
            $query
                ->where('nama_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('alamat_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('nomer_telepon', 'LIKE', '%' . $search . '%')
                ->orWhere('email_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('pas_poto', 'LIKE', '%' . $search . '%');
        })->get();

        return view('pages.detail', [
            'pesertas' => $pesertas,
            'pendaftaran' => $pendaftaran,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($pendaftaran->id);
        return view('pages.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $this->validate($request, [
            'nama_pelatihan' => 'required',
            'nama_pelatih' => 'required',
            'nomer_pelatih' => 'required',
            'waktu_pelatihan' => 'required',
            'jumlah_biaya' => 'required',
            'kouta_peserta' => 'required',
        ]);

        $pendaftaran = Pendaftaran::find($pendaftaran->id);
        $pendaftaran->update([
            'nama_pelatihan'  => $request->nama_pelatihan,
            'nama_pelatih'    => $request->nama_pelatih,
            'nomer_pelatih'   => $request->nomer_pelatih,
            'waktu_pelatihan' => $request->waktu_pelatihan,
            'jumlah_biaya'    => $request->jumlah_biaya,
            'kouta_peserta'   => $request->kouta_peserta,
        ]);

        if ($pendaftaran) {
            //redirect dengan pesan sukses
            return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pendaftaran.index')->with(['error' => 'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::find($id);

        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    function export_excel()
    {
        return Excel::download(new ExportData, "Pendaftaran BLKK.xlsx");
    }
}
