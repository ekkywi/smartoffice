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
    public function showRegistrationForm()
    {
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        return view('auth.pages.register', compact('divisi', 'jabatan'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'divisi' => 'required|uuid|exists:divisi,divisi_id',
            'jabatan' => 'required|uuid|exists:jabatan,jabatan_id',
            'username' => 'required|string|max:100|unique:users,username',
            'password' => 'required|string|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'divisi_id' => $request->divisi,
            'jabatan_id' => $request->jabatan,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status_aktivasi' => 0, // Default value
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
