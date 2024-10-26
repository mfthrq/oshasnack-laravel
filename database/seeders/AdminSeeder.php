<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan Anda mengimpor model User
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data admin dengan role_id = 1
        User::create([
            'username' => 'admin',
            'email' => 'admin@oshasnack.com',
            'password' => Hash::make('osha_jaya123'), // Meng-hash password
            'no_telp' => '123123123',
            'alamat' => 'Baranangsiang',
            'role_id' => 1, // Pastikan kolom role_id ada dalam model User
        ]);
    }
}
