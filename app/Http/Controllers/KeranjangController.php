<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Produk; // Pastikan Anda menggunakan model Produk

class KeranjangController extends Controller
{
    public function index()
    {
        // Mengambil data keranjang dari session
        $keranjang = session()->get('keranjang', []);
        return view('customer.keranjang', compact('keranjang'));
    }

    public function tambahKeranjang(Request $request, $id)
    {
        // Ambil data produk dari database
        $produk = Produk::findOrFail($id);

        // Mengambil data keranjang dari session
        $keranjang = session()->get('keranjang', []);

        // Jika produk sudah ada di keranjang, tambahkan jumlahnya
        if (isset($keranjang[$id])) {
            $keranjang[$id]['jumlah']++;
        } else {
            // Jika produk belum ada di keranjang, tambahkan
            $keranjang[$id] = [
                'nama' => $produk->nama,
                'harga' => $produk->harga,
                'foto' => $produk->foto_produk, // Pastikan ini sesuai dengan kolom yang ada
                'jumlah' => 1,
            ];
        }

        // Simpan kembali keranjang ke session
        session()->put('keranjang', $keranjang);

        // Redirect kembali ke halaman detail produk dengan pesan sukses
        return redirect()->route('produk.detail', $id)->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function hapusKeranjang($id)
    {
        // Ambil keranjang dari sesi
        $keranjang = session()->get('keranjang', []);
        dd($keranjang);
        // Periksa apakah produk dengan ID yang diberikan ada dalam keranjang
        if (isset($keranjang[$id])) {
            // Hapus produk dari keranjang
            unset($keranjang[$id]);
    
            // Simpan kembali keranjang ke sesi
            session()->put('keranjang', $keranjang);
        }

        session()->flash('success', 'Produk berhasil dihapus dari keranjang!');
    
        // Redirect ke halaman keranjang dengan pesan sukses
        return redirect('/keranjang')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }
    
    
}
