<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk-admin', compact('produks'));
    }

    public function indexProdukPelanggan()
    {
        $produks = Produk::all();
        return view('customer.produk', compact('produks'));
    }

    public function showDetailProduk($id)
    {
        // Cari produk berdasarkan id
        $produk = Produk::findOrFail($id);

        // Kirim data produk ke view
        return view('customer/detail-produk', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:500',
            'deskripsi' => 'required|string|max:500',
            'komposisi' => 'required|string|max:500',
            'keunggulan' => 'required|string|max:500',
            'harga' => 'required|string|max:500',
            'foto_produk' => 'required|image|mimes:jpg,jpeg,png|max:5048',
        ]);
    
        // Mengambil file gambar
        $file = $request->file('foto_produk');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/foto_produk'), $filename);
    
        // Simpan data ke database
        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'komposisi' => $request->komposisi,
            'keunggulan' => $request->keunggulan,
            'harga' => $request->harga,
            'foto_produk' => $filename,
        ]);

        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('produk.index')->with('success', 'Data produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::find($id); // Cari produk berdasarkan ID
    
        if (!$produk) {
            return redirect()->route('produk.index')->with('error', 'Data tidak ditemukan.');
        }
    
        return view('admin.produk.edit', compact('produk')); // Kirim data pelanggan ke view
    }

    public function update(Request $request, $id)
    {
        // Mencari produk berdasarkan ID
        $produk = Produk::findOrFail($id);
    
        // Validasi data yang masuk
        $request->validate([
            'nama' => 'required|string|max:500',
            'deskripsi' => 'required|string|max:500',
            'komposisi' => 'required|string|max:500',
            'keunggulan' => 'required|string|max:500',
            'harga' => 'required|string|max:500',
            'foto_produk' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);
    
        // Memperbarui data produk
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->komposisi = $request->komposisi;
        $produk->keunggulan = $request->keunggulan;
        $produk->harga = $request->harga;
        
        // Jika ada file gambar baru yang diupload
        if ($request->hasFile('foto_produk')) {
            // Menghapus gambar lama jika ada
            if ($produk->foto_produk) {
                $oldFilePath = public_path('assets/foto_produk/' . $produk->foto_produk);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Mengambil file gambar baru
            $file = $request->file('foto_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/foto_produk'), $filename);

            // Update foto_produk dengan nama file baru
            $produk->foto_produk = $filename;
        }

        $produk->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('produk.index')->with('success', 'Data produk berhasil diperbarui!');
    } 

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus!');
    }  
}
