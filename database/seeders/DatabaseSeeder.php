<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\Role;
use App\Models\User;
use App\Models\Gender;
use App\Models\Fasilitas;
use App\Models\Kecamatan;
use App\Models\KostFasilitas;
use Illuminate\Database\Seeder;

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

        // Default Kota
        Kota::create([
            'nama' => 'Bandung',
        ]);

        Kota::create([
            'nama' => 'Jakarta',
        ]);

        Kota::create([
            'nama' => 'Surabaya',
        ]);

        Kota::create([
            'nama' => 'Semarang',
        ]);

        Kota::create([
            'nama' => 'Yogyakarta',
        ]);

        // Default Kecamatan
        Kecamatan::create([
            'nama' => 'Coblong',
            'id_kota' => 1,
        ]);

        Kecamatan::create([
            'nama' => 'Sukajadi',
            'id_kota' => 1,
        ]);

        Kecamatan::create([
            'nama' => 'Cidadap',
            'id_kota' => 1,
        ]);

        Kecamatan::create([
            'nama' => 'Gambir',
            'id_kota' => 2,
        ]);

        Kecamatan::create([
            'nama' => 'Menteng',
            'id_kota' => 2,
        ]);

        Kecamatan::create([
            'nama' => 'Senen',
            'id_kota' => 2,
        ]);

        Kecamatan::create([
            'nama' => 'Gubeng',
            'id_kota' => 3,
        ]);

        Kecamatan::create([
            'nama' => 'Tegalsari',
            'id_kota' => 3,
        ]);

        Kecamatan::create([
            'nama' => 'Sawahan',
            'id_kota' => 3,
        ]);

        Kecamatan::create([
            'nama' => 'Semarang Selatan',
            'id_kota' => 4,
        ]);

        Kecamatan::create([
            'nama' => 'Semarang Timur',
            'id_kota' => 4,
        ]);

        Kecamatan::create([
            'nama' => 'Semarang Tengah',
            'id_kota' => 4,
        ]);

        Kecamatan::create([
            'nama' => 'Gondokusuman',
            'id_kota' => 5,
        ]);

        Kecamatan::create([
            'nama' => 'Danurejan',
            'id_kota' => 5,
        ]);

        Kecamatan::create([
            'nama' => 'Gedongtengen',
            'id_kota' => 5,
        ]);

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
            'id_kota' => 1,
            'id_kecamatan' => 1,
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
