<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\Role;
use App\Models\User;
use App\Models\Gender;
use App\Models\Fasilitas;
use App\Models\Provinsi;
use App\Models\KostFasilitas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

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


        // Default Provinsi
        $provinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json')->json();
        foreach ($provinsi as $p) {
            Provinsi::create([
                'id' => $p['id'],
                'nama' => $p['name'],
            ]);
        }

        // Default Kota
        $kota = [];
        foreach ($provinsi as $p) {
            $link = 'https://emsifa.github.io/api-wilayah-indonesia/api/regencies/' . $p['id'] . '.json';
            $kota[$p['name']] = Http::get($link)->json();

            foreach ($kota[$p['name']] as $k) {
                Kota::create([
                    'id' => $k['id'],
                    'nama' => $k['name'],
                    'provinsi_id' => $p['id'],
                ]);
            }
        }

        // Default Fasilitas
        Fasilitas::create([
            'nama' => 'Kamar Mandi Dalam',
        ]);

        Fasilitas::create([
            'nama' => 'Internet',
        ]);

        Fasilitas::create([
            'nama' => 'TV',
        ]);

        // Default Role
        Role::create([
            'nama' => 'Admin',
        ]);

        Role::create([
            'nama' => 'Pemilik',
        ]);

        Role::create([
            'nama' => 'Penyewa',
        ]);

        // Default Gender
        Gender::create([
            'nama' => 'Laki-laki',
        ]);

        Gender::create([
            'nama' => 'Perempuan',
        ]);

        Gender::create([
            'nama' => 'Campur',
        ]);

        // Default User
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'no_hp' => '081234567890',
            'gender_id' => 1,
            'role_id' => 1,
        ]);

        Kost::create([
            'slug' => 'radhitya-kost',
            'nama' => 'Radhitya Kost',
            'alamat' => 'Jl. Radhitya No. 1',
            'deskripsi' => 'Kost ini sangat nyaman',
            'harga_per_bulan' => 1000000,
            'kamar_tersedia' => 20,
            'user_id' => 1,
            'provinsi_id' => 11,
            'kota_id' => 1107,
            'gender_id' => 1,
        ]);

        Kost::create([
            'slug' => 'ammar-kost',
            'nama' => 'Ammar Kost',
            'alamat' => 'Jl. Ammar No. 1',
            'deskripsi' => 'Kost ini sangat nyaman',
            'harga_per_bulan' => 1000,
            'kamar_tersedia' => 13,
            'user_id' => 1,
            'provinsi_id' => 11,
            'kota_id' => 1107,
            'gender_id' => 3,
        ]);

        KostFasilitas::create([
            'kost_id' => 1,
            'fasilitas_id' => 1,
        ]);

        KostFasilitas::create([
            'kost_id' => 1,
            'fasilitas_id' => 3,
        ]);

        KostFasilitas::create([
            'kost_id' => 2,
            'fasilitas_id' => 1,
        ]);

        KostFasilitas::create([
            'kost_id' => 2,
            'fasilitas_id' => 2,
        ]);
    }
}
