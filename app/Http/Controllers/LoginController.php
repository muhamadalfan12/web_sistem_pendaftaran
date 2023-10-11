<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }
    
    public function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/pendaftaran'); // Arahkan pengguna ke halaman pendaftaran
    }

        return back()->with('loginError', 'Username atau Password salah');
        
    }

    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
