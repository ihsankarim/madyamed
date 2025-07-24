<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@madyamed.test',
            'password' => Hash::make('password123'),
        ]);
        $admin->assignRole('admin');

        // Dokter
        $dokter = User::create([
            'name' => 'Dr. Sinta Prakarsa',
            'email' => 'doctor@madyamed.test',
            'password' => Hash::make('password123'),
        ]);
        $dokter->assignRole('dokter');

        // Perawat
        $nurse = User::create([
            'name' => 'Perawat Lestari',
            'email' => 'nurse@madyamed.test',
            'password' => Hash::make('password123'),
        ]);
        $nurse->assignRole('perawat');

        // Pasien
        $patient = User::create([
            'name' => 'Pasien Jaya',
            'email' => 'patient@madyamed.test',
            'password' => Hash::make('password123'),
        ]);
        $patient->assignRole('pasien');
    }
}
