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
        //
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
            'pas_poto'          => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $pas_poto = $request->file('pas_poto');
        $pas_poto->storeAs('public/peserta', $pas_poto->hashName());


        $peserta = Peserta::create([
            'nama_peserta'      => $request->nama_peserta,
            'alamat_peserta'    => $request->alamat_peserta,
            'nomer_telepon'     => $request->nomer_telepon,
            'email_peserta'     => $request->email_peserta,
            'pas_poto'          => $pas_poto->hashName(),
        ]);
        

        if ($peserta) {
            // Redirect dengan pesan sukses dan kembali ke halaman sebelumnya
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            // Redirect dengan pesan error dan kembali ke halaman sebelumnya
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
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

        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
