<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-admin', [AdminAuthController::class, 'showLoginForm'])->name('login');

Route::post('/login-admin', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminAuthController::class, 'dashboard']);
});

// Add this route outside of the middleware group
Route::post('/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('login'); // Redirect to the login page after logout
})->name('admin.logout');


Route::get('/pemesanan', function () {
    return view('admin/pemesanan');
});

Route::get('/pelanggan', function () {
    return view('admin/pelanggan');
});
