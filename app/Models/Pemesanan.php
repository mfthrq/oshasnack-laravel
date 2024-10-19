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
        'username',
        'no_telp',
        'tanggal_pemesanan',
        'bukti_transaksi',
        'status',
    ];
}
