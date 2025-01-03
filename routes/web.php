<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Rute untuk halaman login
route::get('/', [AuthController::class, 'index'])->name('login');
route::get('login', [AuthController::class, 'index'])->name('login');

// Rute untuk halaman registrasi
Route::get('register', [AuthController::class, 'register'])->name('register'); // Menampilkan form registrasi
Route::post('register', [AuthController::class, 'registerPost'])->name('registerPost'); // Memproses data registrasi


// Rute untuk halaman reset
Route::get('reset', [AuthController::class, 'reset'])->name('reset'); // Menampilkan form reset
Route::post('reset', [AuthController::class, 'resetPost'])->name('resetPost'); // Memproses data reset