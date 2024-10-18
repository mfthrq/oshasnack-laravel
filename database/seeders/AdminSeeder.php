<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Oshasnack', // replace with actual name
            'email' => 'admin@oshasnack.com',
            'password' => Hash::make('osha_jaya123'), // Hash the password
        ]);
    }
}

