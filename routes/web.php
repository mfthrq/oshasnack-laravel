<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;

// ======================= ADMIN ROUTE ============================
// ============== ADMIN =================

Route::get('/login-admin', [AdminAuthController::class, 'showLoginForm'])->name('login');

Route::post('/login-admin', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard'); 
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index'); 
    Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index'); 
});

Route::post('/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('login');
})->name('admin.logout');

// ============== PELANGGAN =================

Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');

Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

// ============== PEMESANAN =================

Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');

Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');

// ======================= PELANGGAN ROUTE ============================
Route::get('/', function () {
    return view('customer/index');
});

Route::get('/tentang', function () {
    return view('customer/tentang');
});

Route::get('/produk', function () {
    return view('customer/produk');
});

Route::get('/testimoni', function () {
    return view('customer/testimoni');
});

Route::get('/kontak', function () {
    return view('customer/kontak');
});

Route::get('/detail-produk', function () {
    return view('customer/detail-produk');
});