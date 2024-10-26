<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::with('pelanggan')->get();
        $pelanggans = User::where('role_id', 2)->get(); // Fetch all customers
        $user = Auth::user(); 
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans', 'user')); // Pass $pelanggans to the view
    }

    public function indexBerhasil()
    {
        $pemesanans = Pemesanan::where('status', 'Berhasil')->get();
        $pelanggans = User::where('role_id', 2)->get(); // Fetch all customers
        $user = Auth::user(); 
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans', 'user'));
    }
    
    public function indexDiverifikasi()
    {
        $pemesanans = Pemesanan::where('status', 'Diverifikasi')->get();
        $pelanggans = User::where('role_id', 2)->get(); // Fetch all customers
        $user = Auth::user(); 
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans', 'user'));
    }
    
    public function indexGagal()
    {
        $pemesanans = Pemesanan::where('status', 'Gagal')->get();
        $pelanggans = User::where('role_id', 2)->get(); // Fetch all customers
        $user = Auth::user(); 
        return view('admin.pemesanan', compact('pemesanans', 'pelanggans', 'user'));
    }

    public function indexRiwayatPelanggan()
    {
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Check if the user is authenticated
        if (!$user) {
            return redirect()->route('login')->withErrors(['loginError' => 'You need to log in to view this page.']);
        }
    
        // Get the ID of the logged-in customer
        $idPelanggan = $user->id;
    
        // Fetch all orders related to the logged-in customer
        $pemesanans = Pemesanan::with('pelanggan')
            ->where('id_pelanggan', $idPelanggan) // Filter by id_pelanggan
            ->get();
    
        return view('customer.riwayat', compact('pemesanans'));
    }

    public function indexPembayaran()
    {
        $user = Auth::user();
        return view('customer.pembayaran', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:users,id,role_id,2', // Validate that the pelanggan exists
            'tanggal_pemesanan' => 'required|date',
            'total_produk' => 'required|integer|min:1', // Assuming total_produk is an integer
            'total_biaya_transaksi' => 'required|numeric|min:1', // Assuming it's a number
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
            'id_pelanggan' => 'required|exists:users,id,role_id,2', // Validate that the pelanggan exists
            'tanggal_pemesanan' => 'required|date',
            'total_produk' => 'required|integer|min:1', // Assuming total_produk is an integer
            'total_biaya_transaksi' => 'required|numeric|min:1', // Assuming it's a number
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

    public function update(Request $request, $id)
    {
        // Mencari pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id);
    
        // Validasi data yang masuk
        $request->validate([
            'id_pelanggan' => 'required|exists:users,id,role_id,2', // Validate that the pelanggan exists
            'tanggal_pemesanan' => 'required|date',
            'total_produk' => 'required|integer|min:1', // Assuming total_produk is an integer
            'total_biaya_transaksi' => 'required|numeric|min:1', // Assuming it's a number
            'bukti_transaksi' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'status' => 'required|string',
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
