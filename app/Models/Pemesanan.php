<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan jika nama tabel tidak sesuai dengan konvensi
    protected $table = 'pemesanan';

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'id_pelanggan', // ID pelanggan
        'tanggal_pemesanan',
        'total_produk', // Kolom total produk
        'total_biaya_transaksi', // Kolom total biaya transaksi
        'bukti_transaksi',
        'status',
    ];
    
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan'); // Ensure the foreign key is correct
    }
}
