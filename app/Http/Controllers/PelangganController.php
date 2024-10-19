<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('admin.pelanggan', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        DB::table('pelanggans')->insert([
            'email' => $request->email,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id); // Cari pelanggan berdasarkan ID
    
        if (!$pelanggan) {
            return redirect()->route('pelanggan.index')->with('error', 'Data tidak ditemukan.');
        }
    
        return view('admin.pelanggan.edit', compact('pelanggan')); // Kirim data pelanggan ke view
    }

    public function update(Request $request, $id)
    {
        // Mencari pelanggan berdasarkan ID
        $pelanggan = Pelanggan::findOrFail($id); // Menggunakan findOrFail untuk langsung mengalihkan jika tidak ditemukan
    
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

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus!');
    }
}
