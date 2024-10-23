<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Authenticatable
{
    use Notifiable;
    protected $table = 'pelanggans';
    protected $fillable = [
        'username',
        'email',
        'alamat',
        'no_telp',
        'password',
    ];

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'pelanggan_id');
    }
}

