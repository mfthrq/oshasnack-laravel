<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

// ============== ADMIN =================

Route::get('/login-admin', [AdminAuthController::class, 'showLoginForm'])->name('login');

Route::post('/login-admin', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminAuthController::class, 'dashboard']);
});

Route::post('/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('login');
})->name('admin.logout');

// ============== PELANGGAN =================

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');

Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');

Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

// ============== PEMESANAN =================

Route::get('/pemesanan', function () {
    return view('admin/pemesanan');
});
