<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SweetAlert2\Laravel\Swal;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'no_hp' => 'required',
            'password' => 'required|min:6',
        ]);

        Client::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat!');
    }

    public function showLogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember'); // checkbox remember me

        if (Auth::guard('client')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {

            $request->session()->regenerate(); // keamanan wajib

            Swal::success([
                'theme' => 'dark',
                'title' => 'Login berhasil!',
            ]);

            return redirect()->route('home');
        }

        Swal::error([
            'theme' => 'dark',
            'title' => 'Login gagal!',
        ]);

        return back();
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Swal::success([
            'theme' => 'dark',
            'title' => 'Logout berhasil!',
        ]);

        return redirect()->route('home');
    }
}
