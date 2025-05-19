<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'kepala']);
        Role::firstOrCreate(['name' => 'operator']);
        Role::firstOrCreate(['name' => 'guru']);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('super_admin');

        $user = \App\Models\User::factory()->create([
            'name' => 'guru',
            'email' => 'guru@sekolah.com',
            'password' => bcrypt('guru123'),
        ]);

        $user->assignRole('guru');

        $this->call([
            GuruSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            PageConfigSeeder::class,
            LogoSeeder::class,
            MataPelajaranSeeder::class,
        ]);
        
    }
}
