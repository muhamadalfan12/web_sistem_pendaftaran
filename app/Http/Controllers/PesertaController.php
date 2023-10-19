<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        
        $pesertas = peserta::where(function ($query) use ($search) {
            $query
                ->where('nama_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('alamat_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('nomer_telepon', 'LIKE', '%' . $search . '%')
                ->orWhere('email_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('pas_foto', 'LIKE', '%' . $search . '%');
        })->get();

        return view('pages.detail', [
            'pesertas' => $pesertas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.tambahpeserta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_peserta'      => 'required',
            'alamat_peserta'    => 'required',
            'nomer_telepon'     => 'required',
            'email_peserta'     => 'required',
            'pas_foto'          => 'required',
        ]);

        $peserta = Peserta::create([
            'nama_peserta'      => $request->nama_peserta,
            'alamat_peserta'    => $request->alamat_peserta,
            'nomer_telepon'     => $request->nomer_telepon,
            'email_peserta'     => $request->email_peserta,
            'pas_foto'          => $request->pas_foto,
        ]);

        if ($peserta) {
            //redirect dengan pesan sukses
            return redirect()->route('peserta.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('peserta.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $peserta = Peserta::find($id);

        $peserta->delete();

        return redirect()->route('peserta.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
