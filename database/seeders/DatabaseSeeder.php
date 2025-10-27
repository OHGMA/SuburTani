<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@pupukku.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Buat akun user biasa
        User::create([
            'name' => 'User',
            'email' => 'user@pupukku.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}
