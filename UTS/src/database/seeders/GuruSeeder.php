<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Guru::count()==0) {
        Guru::create([
            'nip' => '20230801002',
            'nama' => 'Budi Santoso',
            'tanggal_lahir' => '1985-07-15',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Merdeka No. 10',
            'no_hp' => '081234567890',
            'email' => 'budi.santoso@example.com',
            'status_kepegawaian' => 'PNS',
            'jabatan' => 'Guru Matematika',
            'foto' => '',
            'pendidikan_terakhir' => 'S1 Pendidikan Matematika',
        ]);

        Guru::create([
            'nip' => '20230108001',
            'nama' => 'Siti Aminah',
            'tanggal_lahir' => '1990-12-20',
            'jenis_kelamin' => 'P',
            'alamat' => 'Jl. Melati No. 5',
            'no_hp' => '082345678901',
            'email' => 'siti.aminah@example.com',
            'status_kepegawaian' => 'Honorer',
            'jabatan' => 'Guru Bahasa Indonesia',
            'foto' => '',
            'pendidikan_terakhir' => 'S1 Bahasa dan Sastra Indonesia',
        ]);
 
      }
    }
}
