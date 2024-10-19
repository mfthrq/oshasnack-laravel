<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Pelanggan;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin/login-admin'); // Return your login view
    }

    public function login(Request $request)
    {
        $request->validate([
            'emailSignIn' => 'required|email',
            'loginPassword' => 'required',
        ]);

        // Use the correct column names
        $credentials = [
            'email' => $request->input('emailSignIn'),
            'password' => $request->input('loginPassword'),
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin'); // Redirect to admin dashboard
        }

        return back()->withErrors(['loginError' => 'Email atau Password Salah.'])->withInput();
    }

    public function dashboard()
    {
        $pelanggans = Pelanggan::all();
        $totalPelanggan = $pelanggans->count(); // Menghitung total pengguna
        return view('admin.index-admin', compact('pelanggans', 'totalPelanggan'))->with('success', 'Berhasil Login');;
    }
}
