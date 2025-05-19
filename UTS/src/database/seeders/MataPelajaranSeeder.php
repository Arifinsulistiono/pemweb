<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapels = [
            ['nama_mapel' => 'Matematika', 'tingkat' => 'SMP'],
            ['nama_mapel' => 'Bahasa Indonesia', 'tingkat' => 'SMP'],
            ['nama_mapel' => 'Bahasa Inggris', 'tingkat' => 'SMP'],
            ['nama_mapel' => 'IPA', 'tingkat' => 'SMP'],
            ['nama_mapel' => 'IPS', 'tingkat' => 'SMP'],
            ['nama_mapel' => 'PKN', 'tingkat' => 'SMP'],
            ['nama_mapel' => 'Agama', 'tingkat' => 'SMP'],
        ];

        foreach ($mapels as $mapel) {
            MataPelajaran::create($mapel);
        }
    }
}
