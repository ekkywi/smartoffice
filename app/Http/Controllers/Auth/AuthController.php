<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Divisi;

class AuthController extends Controller
{
    public function showDivisiList()
    {
        $divisi = Divisi::all();
        return view('auth.pages.register', compact('divisi'));
    }
}
