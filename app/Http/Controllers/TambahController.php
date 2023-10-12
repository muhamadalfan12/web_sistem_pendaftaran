<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function tambah()
    {
        return view('pages.tambah');
    }
}
