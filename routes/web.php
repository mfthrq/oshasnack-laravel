<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\KeranjangController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\PelangganAuth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganAuthController;

// ======================= ADMIN ROUTE ============================
// ============== ADMIN =================

Route::get('/admin/login-admin', [AdminAuthController::class, 'showLoginForm'])->name('login');

Route::post('/admin/login-admin', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard'); 
    Route::get('/admin/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index'); 
    Route::get('/admin/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index'); 
    Route::get('/admin/produk', [ProdukController::class, 'index'])->name('produk.index'); 
});

Route::post('/admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('login');
})->name('admin.logout');

// ============== PELANGGAN =================

Route::post('/admin/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

Route::delete('/admin/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

Route::get('/admin/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');

Route::put('/admin/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

// ============== PEMESANAN =================

Route::post('/admin/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');

Route::delete('/admin/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');

Route::get('/admin/pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('pemesanan.edit');

Route::put('/admin/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');

Route::get('/admin/pemesanan/berhasil', [PemesananController::class, 'indexBerhasil'])->name('pemesanan.berhasil');

Route::get('/admin/pemesanan/diverifikasi', [PemesananController::class, 'indexDiverifikasi'])->name('pemesanan.diverifikasi');

Route::get('/admin/pemesanan/gagal', [PemesananController::class, 'indexGagal'])->name('pemesanan.gagal');

// ============== PRODUK =================

Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('produk.store');

Route::delete('/admin/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');

Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');

// ======================= PELANGGAN ROUTE ============================
// ============== LOGIN =================

Route::get('/login-pelanggan', [PelangganAuthController::class, 'showLoginForm'])->name('login-pelanggan');

Route::post('/login-pelanggan', [PelangganAuthController::class, 'login'])->name('pelanggan.login');

Route::middleware([PelangganAuth::class])->group(function () {
    Route::get('/profile', [PelangganController::class, 'indexProfile'])->name('profile-pelanggan.index'); 

    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index'); 

    Route::get('/pembayaran', function () {
        return view('customer/pembayaran');
    });
    
});

// ============== RIWAYAT PEMESANAN =================
Route::get('/riwayat', [PemesananController::class, 'indexRiwayatPelanggan'])->name('riwayat.index'); 

// ============== PEMBAYARAN =================
Route::post('/pembayaran/store', [PemesananController::class, 'storePembayaran'])->name('pembayaran.storePembayaran');

// ============== SIGNUP =================
Route::get('/signup-pelanggan', function () {
    return view('customer/signup-pelanggan');
});

Route::post('/signup-pelanggan/store', [PelangganController::class, 'storePelanggan'])->name('signup-pelanggan.store');

// ============== PRODUK & DETAIL PRODUK =================
Route::get('/produk', [ProdukController::class, 'indexProdukPelanggan'])->name('produkPelanggan.index'); 

Route::get('/detail-produk/{id}', [ProdukController::class, 'showDetailProduk'])->name('produk.detail');

// ============== PROFILE =================
Route::put('/profile/{id}', [PelangganController::class, 'updatePelanggan'])->name('profile-pelanggan.update');

// ============== UTAMA =================
Route::get('/', function () {
    return view('customer/index');
});

// ============== TENTANG =================
Route::get('/tentang', function () {
    return view('customer/tentang');
});

// ============== TESTIMONI =================
Route::get('/testimoni', function () {
    return view('customer/testimoni');
});

// ============== KONTAK =================
Route::get('/kontak', function () {
    return view('customer/kontak');
});

// ============== lOGOUT =================
Route::post('/logout', function () { 
    Auth::guard('pelanggan')->logout(); 
    session()->forget('id'); 
    session()->forget('username'); 
    session()->forget('email'); 
    session()->forget('no_telp'); 
    session()->forget('alamat'); 
    session()->forget('password'); 
    session()->forget('keranjang');
    return redirect()->route('login-pelanggan'); 
})->name('pelanggan.logout');