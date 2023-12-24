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
                    'id_provinsi' => $p['id'],
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
            'id_gender' => 1,
            'id_role' => 1,
        ]);

        User::create([
            'nama' => 'Radhitya',
            'email' => 'radit@gmail.com',
            'password' => 'radit1234',
            'no_hp' => '080987654321',
            'id_gender' => 1,
            'id_role' => 2,
        ]);

        Kost::create([
            'slug' => 'kost-radhitya',
            'nama' => 'Kost Radhitya',
            'alamat' => 'Jl. Radhitya No. 1',
            'deskripsi' => 'Kost ini sangat nyaman',
            'harga_per_bulan' => 1000000,
            'kamar_tersedia' => 20,
            'id_user' => 1,
            'id_provinsi' => 11,
            'id_kota' => 1107,
            'id_gender' => 1,
        ]);

        KostFasilitas::create([
            'id_kost' => 1,
            'id_fasilitas' => 1,
        ]);

        KostFasilitas::create([
            'id_kost' => 1,
            'id_fasilitas' => 3,
        ]);
    }
}
