<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use App\Models\Produk;

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

        $pemesanans = Pemesanan::all(); // Ambil semua pemesanan
        $totalPemesanan = $pemesanans->count(); // Menghitung total pemesanan

        $produks = Produk::all(); // Ambil semua pemesanan
        $totalProduk = $produks->count(); // Menghitung total pemesanan
    
        // Menghitung pemesanan berdasarkan status
        $totalDiverifikasi = $pemesanans->where('status', 'Diverifikasi')->count();
        $totalBerhasil = $pemesanans->where('status', 'Berhasil')->count();
        $totalGagal = $pemesanans->where('status', 'Gagal')->count();
        
        return view('admin.index-admin', compact('pelanggans', 'totalPelanggan', 'totalPemesanan', 'totalProduk', 'totalDiverifikasi', 'totalBerhasil', 'totalGagal'))->with('success', 'Berhasil Login');
    }
    
}
