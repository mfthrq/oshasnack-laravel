<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::with('pelanggan')->get();
        $pelanggans = Pelanggan::all(); // Fetch all customers
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans')); // Pass $pelanggans to the view
    }

    public function indexBerhasil()
    {
        $pemesanans = Pemesanan::where('status', 'Berhasil')->get();
        $pelanggans = Pelanggan::all(); // Fetch all customers
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans'));
    }
    
    public function indexDiverifikasi()
    {
        $pemesanans = Pemesanan::where('status', 'Diverifikasi')->get();
        $pelanggans = Pelanggan::all(); // Fetch all customers
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans'));
    }
    
    public function indexGagal()
    {
        $pemesanans = Pemesanan::where('status', 'Gagal')->get();
        $pelanggans = Pelanggan::all(); // Fetch all customers
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans'));
    }

    public function indexRiwayatPelanggan()
    {
        $idPelanggan = session('id');

        // Ambil semua pemesanan yang terkait dengan ID pelanggan dari session
        $pemesanans = Pemesanan::with('pelanggan')
            ->where('id_pelanggan', $idPelanggan) // Filter berdasarkan id_pelanggan dari session
            ->get();
    
        return view('customer.riwayat', compact('pemesanans'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id', // Validate that the pelanggan exists
            'tanggal_pemesanan' => 'required|date',
            'total_produk' => 'required|integer|min:1', // Assuming total_produk is an integer
            'total_biaya_transaksi' => 'required|numeric|min:0', // Assuming it's a number
            'bukti_transaksi' => 'required|image|mimes:jpg,jpeg,png|max:5048',
            'status' => 'required|string',
        ]);
    
        // Mengambil file gambar
        $file = $request->file('bukti_transaksi');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/bukti_transaksi'), $filename);
    
        // Simpan data ke database
        Pemesanan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'total_produk' => $request->total_produk,
            'total_biaya_transaksi' => $request->total_biaya_transaksi,
            'bukti_transaksi' => $filename,
            'status' => $request->status,
        ]);

        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('pemesanan.index')->with('success', 'Data pemesanan berhasil ditambahkan!');
    }

    public function storePembayaran(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id', // Validate that the pelanggan exists
            'tanggal_pemesanan' => 'required|date',
            'total_produk' => 'required|integer|min:1', // Assuming total_produk is an integer
            'total_biaya_transaksi' => 'required|numeric|min:0', // Assuming it's a number
            'bukti_transaksi' => 'required|image|mimes:jpg,jpeg,png|max:5048',
            'status' => 'required|string',
        ]);
    
        // Mengambil file gambar
        $file = $request->file('bukti_transaksi');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/bukti_transaksi'), $filename);
    
        // Simpan data ke database
        Pemesanan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'total_produk' => $request->total_produk,
            'total_biaya_transaksi' => $request->total_biaya_transaksi,
            'bukti_transaksi' => $filename,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'Data pembayaran berhasil disimpan!']);
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id); // Cari pemesanan berdasarkan ID
        $pelanggans = Pelanggan::all();
        
        if (!$pemesanan || !$pelanggans) {
            return redirect()->route('pemesanan.index')->with('error', 'Data tidak ditemukan.');
        }
    
        return view('admin.pemesanan.edit', compact('pemesanan', 'pelanggans')); // Kirim data pelanggan ke view
    }

    public function update(Request $request, $id)
    {
        // Mencari pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id);
    
        // Validasi data yang masuk
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id',
            'tanggal_pemesanan' => 'required|date',
            'total_produk' => 'required|integer|min:1',
            'total_biaya_transaksi' => 'required|numeric|min:0',
            'status' => 'required|in:Diverifikasi,Berhasil,Gagal',
            'bukti_transaksi' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);
    
        // Memperbarui data pemesanan
        $pemesanan->id_pelanggan = $request->id_pelanggan;
        $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pemesanan->total_produk = $request->total_produk;
        $pemesanan->total_biaya_transaksi = $request->total_biaya_transaksi;
        $pemesanan->status = $request->status;

        // Jika ada file gambar baru yang diupload
        if ($request->hasFile('bukti_transaksi')) {
            // Menghapus gambar lama jika ada
            if ($pemesanan->bukti_transaksi) {
                $oldFilePath = public_path('assets/bukti_transaksi/' . $pemesanan->bukti_transaksi);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Mengambil file gambar baru
            $file = $request->file('bukti_transaksi');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/bukti_transaksi'), $filename);

            // Update foto_produk dengan nama file baru
            $pemesanan->bukti_transaksi = $filename;
        }
        
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
