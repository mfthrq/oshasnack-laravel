<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemesanan')->insert([
            [
                'username' => 'user1',
                'no_telp' => '081234567890',
                'tanggal_pemesanan' => now(),
                'bukti_transaksi' => 'bukti1.jpg',
                'status' => 'Diverifikasi',
            ],
            [
                'username' => 'user2',
                'no_telp' => '082345678901',
                'tanggal_pemesanan' => now(),
                'bukti_transaksi' => 'bukti2.jpg',
                'status' => 'Diverifikasi',
            ],
        ]);
    }
}

