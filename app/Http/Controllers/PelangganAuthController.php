<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelangganAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('customer/login-pelanggan'); // Return your login view
    }

    public function login(Request $request)
    {
        $request->validate([
            'emailSignIn' => 'required|email',
            'loginPassword' => 'required',
        ]);
    
        $credentials = [
            'email' => $request->input('emailSignIn'),
            'password' => $request->input('loginPassword'),
        ];
    
        if (Auth::guard('pelanggan')->attempt($credentials)) {
            // Ambil user yang sedang login
            $user = Auth::guard('pelanggan')->user();
    
            // Simpan username ke dalam session
            session(['username' => $user->username]);
            session(['email' => $user->email]);
            session(['no_telp' => $user->no_telp]);
            session(['alamat' => $user->alamat]);
            session(['password' => $user->password]);
            
            session()->flash('loginSuccess', true);
    
            return redirect()->intended('/profile'); // Redirect ke profil pelanggan
        }
    
        return back()->withErrors(['loginError' => 'Email atau Password Salah.'])->withInput();
    }    
    
    public function logout(Request $request)
    {
        Auth::guard('pelanggan')->logout();
        
        // Hapus username dari session
        $request->session()->forget('username');
        $request->session()->forget('email');
        $request->session()->forget('no_telp');
        $request->session()->forget('alamat');
        $request->session()->forget('password');

        return redirect('/login-pelanggan');
    }
}
