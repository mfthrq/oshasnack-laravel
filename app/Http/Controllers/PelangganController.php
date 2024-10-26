<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = User::where('role_id', 2)->get(); 
        $user = Auth::user(); 
        return view('admin.pelanggan', compact('pelanggans', 'user'));
    }

    public function indexProfile()
    {
        $pelanggans = User::where('role_id', 2)->get(); 
        $user = Auth::user(); 
        return view('customer.profile', compact('pelanggans', 'user'));
    }

    public function store(Request $request)
    {
        // Insert the new customer with role_id = 2
        DB::table('users')->insert([
            'role_id' => 2, // Set role_id to 2 for customers
            'email' => $request->email,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function storePelanggan(Request $request)
    {
    
        // Insert the new customer with role_id = 2
        DB::table('users')->insert([
            'role_id' => 2, // Set role_id to 2 for customers
            'email' => $request->email,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        // Mencari pelanggan berdasarkan ID
        $pelanggan = User::findOrFail($id); // Menggunakan findOrFail untuk langsung mengalihkan jika tidak ditemukan
    
        // Validasi data yang masuk
        $request->validate([
            'email' => 'required|email',
            'username' => 'required|string',
            'no_telp' => 'required|string',
            'alamat' => 'required|string',
            'password' => 'nullable|min:6', // Password opsional, min 6 karakter
        ]);
    
        // Memperbarui data pelanggan
        $pelanggan->email = $request->email;
        $pelanggan->username = $request->username;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->alamat = $request->alamat;
    
        // Update password hanya jika diisi
        if ($request->filled('password')) {
            $pelanggan->password = bcrypt($request->password);
        }
    
        // Simpan perubahan ke database
        $pelanggan->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil diperbarui!');
    }  
    
    public function updatePelanggan(Request $request, $id)
    {
        // Mencari pelanggan berdasarkan ID
        $pelanggan = User::findOrFail($id); // Menggunakan findOrFail untuk langsung mengalihkan jika tidak ditemukan
    
        // Validasi data yang masuk
        $request->validate([
            'email' => 'required|email',
            'username' => 'required|string',
            'no_telp' => 'required|string',
            'alamat' => 'required|string',
            'password' => 'nullable|min:6', // Password opsional, min 6 karakter
        ]);
    
        // Memperbarui data pelanggan
        $pelanggan->email = $request->email;
        $pelanggan->username = $request->username;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->alamat = $request->alamat;
    
        // Update password hanya jika diisi
        if ($request->filled('password')) {
            $pelanggan->password = bcrypt($request->password);
        }
    
        // Simpan perubahan ke database
        $pelanggan->save();
    
        // Perbarui session dengan data terbaru
        session([
            'id' => $pelanggan->id,
            'email' => $pelanggan->email,
            'username' => $pelanggan->username,
            'no_telp' => $pelanggan->no_telp,
            'alamat' => $pelanggan->alamat,
            'password' => $pelanggan->password,
        ]);
    
        // Redirect ke /profile dengan pesan sukses
        return redirect('/profile')->with('success', 'Data berhasil diperbarui!');
    }
    

    public function destroy($id)
    {
        $pelanggan = User::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus!');
    }
}
