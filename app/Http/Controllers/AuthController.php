<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use App\Models\Produk;

class AuthController extends Controller
{
    // ====== ADMIN ======
    public function showAdminLoginForm()
    {
        return view('admin.login-admin');
    }

    public function adminLogin(Request $request)
    {
        // Update the validation rules to match the input names in the form
        $request->validate([
            'emailSignIn' => 'required|email', // Change from 'email' to 'emailSignIn'
            'loginPassword' => 'required|string', // Change from 'password' to 'loginPassword'
        ]);
    
        // Attempt to authenticate with the updated input names
        if (Auth::attempt(['email' => $request->emailSignIn, 'password' => $request->loginPassword, 'role_id' => 1])) {
            return redirect()->intended('admin')->with('success', 'Login Admin berhasil');
        }
    
        return redirect()->back()->withErrors(['loginError' => 'Email atau Password Salah!']); // Change key to 'loginError'
    }

    public function dashboardAdmin()
    {
        $pelanggans = User::where('role_id', 2)->get();
        $totalPelanggan = $pelanggans->count();

        $pemesanans = Pemesanan::all(); // Ambil semua pemesanan
        $totalPemesanan = $pemesanans->count(); // Menghitung total pemesanan

        $produks = Produk::all(); // Ambil semua pemesanan
        $totalProduk = $produks->count(); // Menghitung total pemesanan
    
        // Menghitung pemesanan berdasarkan status
        $totalDiverifikasi = $pemesanans->where('status', 'Diverifikasi')->count();
        $totalBerhasil = $pemesanans->where('status', 'Berhasil')->count();
        $totalGagal = $pemesanans->where('status', 'Gagal')->count();
        $user = Auth::user(); // Retrieve the authenticated user
        return view('admin.index-admin', compact('user', 'pelanggans', 'totalPelanggan', 'totalPemesanan', 'totalProduk', 'totalDiverifikasi', 'totalBerhasil', 'totalGagal'))->with('success', 'Berhasil Login');
    }

    // ====== PELANGGAN ======
    public function showCustomerLoginForm()
    {
        return view('customer.login-pelanggan');
    }

    public function customerLogin(Request $request)
    {
        $request->validate([
            'emailSignIn' => 'required|email',
            'loginPassword' => 'required|string',
        ]);
    
        // Change 'email' and 'password' to match the form input names
        if (Auth::attempt(['email' => $request->emailSignIn, 'password' => $request->loginPassword, 'role_id' => 2])) {
            return redirect()->intended('profile')->with('success', 'Login Pelanggan berhasil');
        }
    
        return redirect()->back()->withErrors(['loginError' => 'Email atau Password Salah!']);
    }
    
    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Logout berhasil');
    }

    public function logoutPelanggan()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil');
    }
}
