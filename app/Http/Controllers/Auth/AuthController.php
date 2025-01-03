<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        // Mmebuat token reset password
        $resetPasswordToken = Str::random(60);

        // Membuat user baru
        User::create([
            'name' => $request->name,
            'divisi_id' => $request->divisi,
            'jabatan_id' => $request->jabatan,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status_aktivasi' => 0, // Nilai default
            'reset_password_token' => $resetPasswordToken,
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('register')->with('success', 'Registrasi berhasil. Silakan lakukan request aktivasi akun ke Administrator.');
    }

    // Menampilkan halaman reset password
    public function reset()
    {
        return view('auth.pages.reset');
    }

    // Memproses data reset password yang dikirimkan
    public function resetPost(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'token' => 'required|string',
            'username' => 'required|string|exists:users,username',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Cari user berdasarkan token dan username
        $user = User::where('reset_password_token', $request->token)
            ->where('username', $request->username)
            ->first();

        if (!$user) {
            return back()->withErrors(['token' => 'Token reset password tidak valid atau username tidak ditemukan.']);
        }

        // Update password dan buat token baru
        $user->password = Hash::make($request->password);
        $user->reset_password_token = Str::random(60);
        $user->save();

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('reset')->with('success', 'Password Anda telah berhasil direset!');
    }
}
