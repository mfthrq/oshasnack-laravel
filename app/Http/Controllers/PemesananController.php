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

    public function indexBerhasil()
    {
        $pemesanans = Pemesanan::where('status', 'Berhasil')->get();
        return view('admin.pemesanan', compact('pemesanans'));
    }
    
    public function indexDiverifikasi()
    {
        $pemesanans = Pemesanan::where('status', 'Diverifikasi')->get();
        return view('admin.pemesanan', compact('pemesanans'));
    }
    
    public function indexGagal()
    {
        $pemesanans = Pemesanan::where('status', 'Gagal')->get();
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

    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id); // Cari pemesanan berdasarkan ID
    
        if (!$pemesanan) {
            return redirect()->route('pemesanan.index')->with('error', 'Data tidak ditemukan.');
        }
    
        return view('admin.pemesanan.edit', compact('pemesanan')); // Kirim data pelanggan ke view
    }

    public function update(Request $request, $id)
    {
        // Mencari pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id);
    
        // Validasi data yang masuk
        $request->validate([
            'username' => 'required|string',
            'no_telp' => 'required|string',
            'tanggal_pemesanan' => 'required|date_format:Y-m-d\TH:i', // Menyesuaikan dengan input datetime-local
            'status' => 'required|in:Diverifikasi,Berhasil,Gagal',
        ]);
    
        // Memperbarui data pemesanan
        $pemesanan->username = $request->username;
        $pemesanan->no_telp = $request->no_telp;
        $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pemesanan->status = $request->status;
    
        // // Jika ada file bukti transaksi yang di-upload
        // if ($request->hasFile('bukti_transaksi')) {
        //     // Simpan gambar baru ke folder 'assets/bukti_transaksi'
        //     $file = $request->file('bukti_transaksi');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('assets/bukti_transaksi'), $filename);
    
        //     // Hapus gambar lama jika ada
        //     if ($pemesanan->bukti_transaksi && file_exists(public_path('assets/bukti_transaksi/' . $pemesanan->bukti_transaksi))) {
        //         unlink(public_path('assets/bukti_transaksi/' . $pemesanan->bukti_transaksi));
        //     }
    
        //     // Simpan nama gambar baru
        //     $pemesanan->bukti_transaksi = $filename;
        // }
    
        // // Simpan perubahan ke database
        
        $pemesanan->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('pemesanan.index')->with('success', 'Data pemesanan berhasil diperbarui!');
    }  

    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')->with('success', 'Data berhasil dihapus!');
    }    
    
}
