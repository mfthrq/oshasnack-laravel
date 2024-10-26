<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan role_id-nya adalah 1
        if (Auth::check() && Auth::user()->role_id === 1) {
            return $next($request); // Jika pengguna adalah admin, lanjutkan ke rute berikutnya
        }

        // Jika bukan admin, redirect atau tampilkan pesan error
        return redirect()->route('admin.login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
