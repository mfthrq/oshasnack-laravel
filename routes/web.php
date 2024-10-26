<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\KeranjangController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\PelangganAuth;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganAuthController;
use App\Http\Controllers\AuthController;

// ======================= ADMIN ROUTE ============================
// ============== ADMIN =================

Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login.submit');

Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin', [AuthController::class, 'dashboardAdmin'])->name('admin.index-admin'); 
    Route::get('/admin/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index'); 
    Route::get('/admin/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index'); 
    Route::get('/admin/produk', [ProdukController::class, 'index'])->name('produk.index'); 
});

// Logout Admin
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ============== PELANGGAN =================

Route::post('/admin/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

Route::delete('/admin/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

Route::put('/admin/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

// ============== PEMESANAN =================

Route::post('/admin/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');

Route::delete('/admin/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');

Route::put('/admin/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');

Route::get('/admin/pemesanan/berhasil', [PemesananController::class, 'indexBerhasil'])->name('pemesanan.berhasil');

Route::get('/admin/pemesanan/diverifikasi', [PemesananController::class, 'indexDiverifikasi'])->name('pemesanan.diverifikasi');

Route::get('/admin/pemesanan/gagal', [PemesananController::class, 'indexGagal'])->name('pemesanan.gagal');

// ============== PRODUK =================

Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('produk.store');

Route::delete('/admin/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');

// ======================= PELANGGAN ROUTE ============================
// ============== LOGIN =================

Route::get('/login', [AuthController::class, 'showCustomerLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'customerLogin'])->name('customer.login.submit');

Route::middleware([PelangganAuth::class])->group(function () {
    Route::get('/profile', [PelangganController::class, 'indexProfile'])->name('profile-pelanggan.index'); 

    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index'); 

    Route::get('/pembayaran', [PemesananController::class, 'indexPembayaran'])->name('pembayaran.index'); 
    
    Route::get('/riwayat', [PemesananController::class, 'indexRiwayatPelanggan'])->name('riwayat.index'); 
});

// ============== PEMBAYARAN =================
Route::post('/pembayaran/store', [PemesananController::class, 'storePembayaran'])->name('pembayaran.storePembayaran');

// ============== SIGNUP =================
Route::get('/signup', function () {
    return view('customer/signup-pelanggan');
});

Route::post('/signup/store', [PelangganController::class, 'storePelanggan'])->name('signup.store');

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
// Route::post('/logout', function () { 
//     Auth::guard('pelanggan')->logout(); 
//     session()->forget('id'); 
//     session()->forget('username'); 
//     session()->forget('email'); 
//     session()->forget('no_telp'); 
//     session()->forget('alamat'); 
//     session()->forget('password'); 
//     session()->forget('keranjang');
//     return redirect()->route('login-pelanggan'); 
// })->name('pelanggan.logout');

Route::post('/logout', [AuthController::class, 'logoutPelanggan'])->name('pelanggan.logout');