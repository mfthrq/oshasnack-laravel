<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelangganAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('pelanggan')->check()) {
            return redirect('/login-pelanggan');
        }

        return $next($request);
    }
}

