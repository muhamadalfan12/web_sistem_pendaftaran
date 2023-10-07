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
        return redirect('/pendaftaran');
        // Isi metode ini sesuai dengan kebutuhan Anda
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Arahkan pengguna ke halaman pendaftaran
            return redirect('/pendaftaran');
        }

        return back()->withErrors([
            'loginError' => 'Email atau Password salah'
        ])->withInput($request->except('password'));
    }

    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
