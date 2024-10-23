<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Authenticatable
{
    use Notifiable;
    protected $table = 'pelanggans';
    protected $fillable = ['email', 'username', 'no_telp', 'password'];
}

