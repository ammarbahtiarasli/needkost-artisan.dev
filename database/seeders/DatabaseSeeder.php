<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kota::create([
            'nama_kota' => 'Bandung',
        ]);

        Kota::create([
            'nama_kota' => 'Jakarta',
        ]);

        Kota::create([
            'nama_kota' => 'Surabaya',
        ]);

        Kota::create([
            'nama_kota' => 'Semarang',
        ]);

        Kota::create([
            'nama_kota' => 'Yogyakarta',
        ]);
    }
}
