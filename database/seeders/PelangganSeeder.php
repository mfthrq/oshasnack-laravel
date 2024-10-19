<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        DB::table('pelanggans')->insert([
            [
                'email' => 'user1@example.com',
                'username' => 'user1',
                'no_telp' => '081234567890',
                'password' => Hash::make('password123'),
            ],
            [
                'email' => 'user2@example.com',
                'username' => 'user2',
                'no_telp' => '081234567891',
                'password' => Hash::make('password456'),
            ],
            [
                'email' => 'user3@example.com',
                'username' => 'user3',
                'no_telp' => '081234567892',
                'password' => Hash::make('password789'),
            ],
        ]);
    }
}

