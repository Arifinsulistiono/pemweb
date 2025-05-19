<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Super Admin
        $superAdmin = User::firstOrCreate(
            ['email' => 'super@admin.com'],
            [
                'name' => 'Super Admin',
                'password' => 'password', // akan otomatis di-hash jika model casts-nya benar
            ]
        );
        $superAdmin->assignRole('super_admin');

        // Admin Sekolah
        $admin = User::firstOrCreate(
            ['email' => 'admin@sekolah.com'],
            [
                'name' => 'Admin Sekolah',
                'password' => 'password', // akan otomatis di-hash jika model casts-nya benar
            ]
        );
        $admin->assignRole('admin');

        // Kepala Sekolah
        $kepala = User::firstOrCreate(
            ['email' => 'kepala@sekolah.com'],
            [
                'name' => 'Kepala Sekolah',
                'password' => 'password', // akan otomatis di-hash jika model casts-nya benar
            ]
        );
        $kepala->assignRole('kepala');

        // Operator Dapodik
        $operator = User::firstOrCreate(
            ['email' => 'operator@sekolah.com'],
            [
                'name' => 'Operator Dapodik',
                'password' => 'password', // akan otomatis di-hash jika model casts-nya benar
            ]
        );
        $operator->assignRole('operator');

        // Guru
        $guru = User::firstOrCreate(
            ['email' => 'guru@sekolah.com'],
            [
                'name' => 'Guru Umum',
                'password' => 'password', // akan otomatis di-hash jika model casts-nya benar
            ]
        );
        $guru->assignRole('guru');
    }
}
