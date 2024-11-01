<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'pemesanan';

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'id_pelanggan', // ID pelanggan
        'tanggal_pemesanan',
        'total_produk', // Kolom total produk
        'total_biaya_transaksi', // Kolom total biaya transaksi
        'bukti_transaksi',
        'alamat',
        'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'id_pelanggan'); // Referencing the User model now
    }
}
