<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'role_id',
        'email',
        'username',
        'no_telp',
        'alamat',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
