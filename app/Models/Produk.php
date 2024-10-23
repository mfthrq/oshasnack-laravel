<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Specify the table name if it's not the default 'produk'
    protected $table = 'produk';

    // The attributes that are mass assignable
    protected $fillable = [
        'nama',
        'deskripsi',
        'komposisi',
        'keunggulan',
        'harga',
        'foto_produk',
    ];
}
