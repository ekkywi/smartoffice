<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('auth.pages.login');
    }

    // Menampilkan form registrasi dengan data divisi dan jabatan
    public function register()
    {
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        return view('auth.pages.register', compact('divisi', 'jabatan'));
    }

    // Memproses data registrasi yang dikirimkan
    public function registerPost(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'name' => 'required|string|max:100',
            'divisi' => 'required|uuid|exists:divisi,divisi_id',
            'jabatan' => 'required|uuid|exists:jabatan,jabatan_id',
            'username' => 'required|string|max:100|unique:users,username',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Membuat user baru
        User::create([
            'name' => $request->name,
            'divisi_id' => $request->divisi,
            'jabatan_id' => $request->jabatan,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status_aktivasi' => 0, // Nilai default
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
