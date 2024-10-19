<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return view('admin.pemesanan', compact('pemesanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'tanggal_pemesanan' => 'required|date',
            'bukti_transaksi' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validasi file gambar
            'status' => 'required|string',
        ]);
    
        // Mengambil file gambar
        $file = $request->file('bukti_transaksi');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/bukti_transaksi'), $filename);
    
        // Simpan data ke database
        Pemesanan::create([
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'bukti_transaksi' => $filename,
            'status' => $request->status,
        ]);
        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('pemesanan.index')->with('success', 'Data pemesanan berhasil ditambahkan!');
    }


    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')->with('success', 'Data berhasil dihapus!');
    }    
    
}
