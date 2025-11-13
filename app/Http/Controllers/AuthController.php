<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        
    }

    /**
     * Tampilkan halaman register
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Proses register
     */
    public function register(Request $request)
    {
        // Validasi input
        Validator::make($request->all(), [
            'nama_perusahaan' => 'required|string|max:255',
            'email'           => 'required|email|unique:clients,email',
            'no_hp'           => 'required|string|max:20|unique:clients,no_hp',
            'password'        => 'required|string|min:8|confirmed',
        ]);

        Client::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'email'           => $request->email,
            'no_hp'           => $request->no_hp,
            'password'        => Hash::make($request->password),
        ]);

        return view('pages.hero');
    }

    /**
     * Proses logout
     */
    public function logout(Request $request)
    {
        
    }
}
