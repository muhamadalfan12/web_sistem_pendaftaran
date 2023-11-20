<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    protected $pesertas;
    public function __construct()
    {
        $this->pesertas = Peserta::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Filter Kwitansi berdasarkan pencarian
        $pesertas = peserta::where(function ($query) use ($search) {
            $query
                ->where('nama_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('alamat_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('nomer_telepon', 'LIKE', '%' . $search . '%')
                ->orWhere('email_peserta', 'LIKE', '%' . $search . '%')
                ->orWhere('pas_poto', 'LIKE', '%' . $search . '%');
        })->get();

        // if ($pesertas->count() == 0) {
        //     session()->flash('error', 'peserta tidak ditemukan');
        //     return redirect('/peserta');
        // }

        return view('pages.detail', [
            'pesertas' => $pesertas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pendaftaran = Pendaftaran::find($id); // atau cara lain sesuai dengan kebutuhan Anda

        return view('pages.tambahpeserta', [
            'pendaftaran' => $pendaftaran,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $this->validate($request, [
        'nama_peserta' => 'required',
        'alamat_peserta' => 'required',
        'nomer_telepon' => 'required',
        'email_peserta' => 'required',
        'pas_poto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    $pas_poto = $request->file('pas_poto');
    $pas_poto->storeAs('public/peserta', $pas_poto->hashName());

    // Ambil ID pendaftaran yang sesuai dari request
    $pendaftaranId = $request->input('pendaftaran_id');

    $peserta = Peserta::create([
        'nama_peserta' => $request->nama_peserta,
        'alamat_peserta' => $request->alamat_peserta,
        'nomer_telepon' => $request->nomer_telepon,
        'email_peserta' => $request->email_peserta,
        'pas_poto' => $pas_poto->hashName(),
        'pendaftaran_id' => $pendaftaranId, // Tautkan peserta dengan pendaftaran yang sesuai
    ]);

    if ($peserta) {
        // Redirect dengan pesan sukses dan kembali ke halaman sebelumnya
        return redirect()->route('pendaftaran.show', $pendaftaranId)->with(['success' => 'Peserta berhasil ditambahkan!']);
    } else {
        // Redirect dengan pesan error dan kembali ke halaman sebelumnya
        return redirect()->back()->with(['error' => 'Gagal menambahkan peserta!']);
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
    public function edit(Peserta $peserta, $id)
    {
        $peserta = Peserta::find($id);
        return view('pages.editpeserta', compact('peserta'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta, $id)
{
    $this->validate($request, [
        'nama_peserta'   => 'required',
        'alamat_peserta' => 'required',
        'nomer_telepon'  => 'required',
        'email_peserta'  => 'required',
        'pas_poto'       => 'image|mimes:png,jpg,jpeg|max:2048',
    ]);

    $peserta = Peserta::find($id);
    $pendaftaranId = $peserta->pendaftaran_id;
    if ($request->hasFile('pas_poto')) {
        // Upload new image
        $pas_poto = $request->file('pas_poto');
        $pas_poto_path = $pas_poto->storeAs('public/peserta', $pas_poto->hashName());
        
        // Delete old image
        Storage::delete('public/peserta/'.$peserta->pas_poto);

        // Update peserta with new image
        $peserta->update([
            'nama_peserta'   => $request->nama_peserta,
            'alamat_peserta' => $request->alamat_peserta,
            'nomer_telepon'  => $request->nomer_telepon,
            'email_peserta'  => $request->email_peserta,
            'pas_poto'       => $pas_poto->hashName(),
        ]);

    } else {
        // Update peserta without image
        $peserta->update([
            'nama_peserta'   => $request->nama_peserta,
            'alamat_peserta' => $request->alamat_peserta,
            'nomer_telepon'  => $request->nomer_telepon,
            'email_peserta'  => $request->email_peserta,
        ]);
    }

    if ($peserta) {
        // Redirect dengan pesan sukses dan kembali ke halaman sebelumnya
        return redirect()->route('pendaftaran.show', $pendaftaranId)->with(['success' => 'Peserta berhasil ditambahkan!']);
    } else {
        // Redirect dengan pesan error dan kembali ke halaman sebelumnya
        return redirect()->back()->with(['error' => 'Gagal menambahkan peserta!']);
    }
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
