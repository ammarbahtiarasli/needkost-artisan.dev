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

        Fasilitas::create([
            'nama' => 'Lemari'
        ]);

        Fasilitas::create([
            'nama' => 'Kasur'
        ]);

        Fasilitas::create([
            'nama' => 'Listrik'
        ]);

        Fasilitas::create([
            'nama' => 'Dapur Bersama'
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
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam doloremque consequatur ipsa velit, ratione accusamus dolorum molestiae, culpa eligendi illum tempora molestias. Nisi consectetur necessitatibus ipsam ratione placeat, voluptatibus nobis velit molestiae voluptas optio qui dolorem doloribus pariatur, laboriosam unde distinctio dolore ipsa sit soluta odio. Incidunt sed eius impedit dolorum quaerat labore pariatur ullam aspernatur doloremque. Dolor ipsam necessitatibus in voluptatibus. Molestias nam laudantium doloremque laboriosam vitae accusamus minima quisquam non, quasi eaque qui dolores ducimus quidem veritatis voluptatum numquam dolorem. Ad dolorum rem tempora repudiandae, sed optio, distinctio cupiditate porro sit quos nulla temporibus voluptatum aliquid totam eius quam molestias reiciendis doloribus nemo magnam fugiat accusantium repellat impedit eum. Inventore veniam labore facilis dignissimos ad, illo nesciunt! Debitis quis velit impedit perferendis illo possimus est consequatur odit nemo totam sunt ipsum ut incidunt quo dignissimos aut nulla vero, ratione omnis fugiat ipsam! Non sapiente consequatur excepturi eveniet iste, numquam esse quidem doloremque vero labore tempore consectetur! Praesentium magni maxime fugit enim nostrum sequi natus harum. Doloremque porro ad odio esse doloribus impedit fugit aliquam laboriosam quis nemo totam, dolor quisquam perferendis! Ad, praesentium maiores! Maxime soluta assumenda dignissimos excepturi culpa voluptate ab quae quod consequuntur quibusdam, veritatis, velit nostrum nemo facere sunt perspiciatis impedit. Nemo nihil dicta, odio corrupti iusto ducimus earum vel quo laborum consequatur culpa aliquid debitis, ipsam officia quaerat laudantium obcaecati totam architecto? Suscipit magni reiciendis aliquid sunt, quos eaque quis incidunt perferendis. Nisi consectetur, cupiditate obcaecati nam ipsa sunt, quibusdam aspernatur, quo totam dolores odit autem modi inventore cum quod laudantium rem alias corrupti nihil. Ducimus quasi unde placeat saepe mollitia maiores repellendus et facere iure odit! Impedit, necessitatibus? Quo, quam, obcaecati eos animi nemo iste sed dolores culpa blanditiis velit porro ut, possimus enim doloremque ipsa nihil corporis odio ex. Odit ducimus, aliquid distinctio quaerat eius quia. Autem, molestias tempore ea laborum dolorum consequuntur, asperiores tenetur nihil cumque quia doloremque reprehenderit? Cumque dolorem similique molestiae iste minus eaque esse ad quod quibusdam, voluptates libero, sed ea explicabo, repudiandae delectus error nulla labore ipsa hic. Ea corrupti perferendis harum laboriosam odio inventore ipsa eum, asperiores vero iste esse cupiditate quia nam nulla sapiente qui natus hic alias error nemo praesentium nihil assumenda. Sunt repellendus quod voluptates et veritatis suscipit sapiente non mollitia quo obcaecati ratione, deleniti amet inventore temporibus illo nihil nemo adipisci eum sed, ipsam maxime laboriosam consequatur officiis asperiores! Praesentium, veritatis a.',
            'harga_per_bulan' => 100000,
            'kamar_tersedia' => 20,
            'user_id' => 1,
            'provinsi_id' => 11,
            'kota_id' => 1107,
            'gender_id' => 1,
        ]);

        Kost::create([
            'slug' => 'ammar-kost',
            'nama' => 'Ammar Kost',
            'alamat' => 'Jl. Ammar No. 2',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam doloremque consequatur ipsa velit, ratione accusamus dolorum molestiae, culpa eligendi illum tempora molestias. Nisi consectetur necessitatibus ipsam ratione placeat, voluptatibus nobis velit molestiae voluptas optio qui dolorem doloribus pariatur, laboriosam unde distinctio dolore ipsa sit soluta odio. Incidunt sed eius impedit dolorum quaerat labore pariatur ullam aspernatur doloremque. Dolor ipsam necessitatibus in voluptatibus. Molestias nam laudantium doloremque laboriosam vitae accusamus minima quisquam non, quasi eaque qui dolores ducimus quidem veritatis voluptatum numquam dolorem. Ad dolorum rem tempora repudiandae, sed optio, distinctio cupiditate porro sit quos nulla temporibus voluptatum aliquid totam eius quam molestias reiciendis doloribus nemo magnam fugiat accusantium repellat impedit eum. Inventore veniam labore facilis dignissimos ad, illo nesciunt! Debitis quis velit impedit perferendis illo possimus est consequatur odit nemo totam sunt ipsum ut incidunt quo dignissimos aut nulla vero, ratione omnis fugiat ipsam! Non sapiente consequatur excepturi eveniet iste, numquam esse quidem doloremque vero labore tempore consectetur! Praesentium magni maxime fugit enim nostrum sequi natus harum. Doloremque porro ad odio esse doloribus impedit fugit aliquam laboriosam quis nemo totam, dolor quisquam perferendis! Ad, praesentium maiores! Maxime soluta assumenda dignissimos excepturi culpa voluptate ab quae quod consequuntur quibusdam, veritatis, velit nostrum nemo facere sunt perspiciatis impedit.',
            'harga_per_bulan' => 1000,
            'kamar_tersedia' => 13,
            'user_id' => 1,
            'provinsi_id' => 11,
            'kota_id' => 1107,
            'gender_id' => 3,
        ]);

        Kost::create([
            'slug' => 'rivan-kost',
            'nama' => 'Rivan Kost',
            'alamat' => 'Jl. Rivan No. 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam doloremque consequatur ipsa velit, ratione accusamus dolorum molestiae, culpa eligendi illum tempora molestias. Nisi consectetur necessitatibus ipsam ratione placeat, voluptatibus nobis velit molestiae voluptas optio qui dolorem doloribus pariatur, laboriosam unde distinctio dolore ipsa sit soluta odio. Incidunt sed eius impedit dolorum quaerat labore pariatur ullam aspernatur doloremque. Dolor ipsam necessitatibus in voluptatibus. Molestias nam laudantium doloremque laboriosam vitae accusamus minima quisquam non, quasi eaque qui dolores ducimus quidem veritatis voluptatum numquam dolorem. Ad dolorum rem tempora repudiandae, sed optio, distinctio cupiditate porro sit quos nulla temporibus voluptatum aliquid totam eius quam molestias reiciendis doloribus nemo magnam fugiat accusantium repellat impedit eum.',
            'harga_per_bulan' => 150000,
            'kamar_tersedia' => 21,
            'user_id' => 1,
            'provinsi_id' => 11,
            'kota_id' => 1108,
            'gender_id' => 2,
        ]);

        Kost::create([
            'slug' => 'lanang-kost',
            'nama' => 'Lanang Kost',
            'alamat' => 'Jl. Lanang No. 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam doloremque consequatur ipsa velit, ratione accusamus dolorum molestiae, culpa eligendi illum tempora molestias. Nisi consectetur necessitatibus ipsam ratione placeat, voluptatibus nobis velit molestiae voluptas optio qui dolorem doloribus pariatur, laboriosam unde distinctio dolore ipsa sit soluta odio. Incidunt sed eius impedit dolorum quaerat labore pariatur ullam aspernatur doloremque. Dolor ipsam necessitatibus in voluptatibus. Molestias nam laudantium doloremque laboriosam vitae accusamus minima quisquam non, quasi eaque qui dolores ducimus quidem veritatis voluptatum numquam dolorem. Ad dolorum rem tempora repudiandae, sed optio, distinctio cupiditate porro sit quos nulla temporibus voluptatum aliquid totam eius quam molestias reiciendis doloribus nemo magnam fugiat accusantium repellat impedit eum. Inventore veniam labore facilis dignissimos ad, illo nesciunt! Debitis quis velit impedit perferendis illo possimus est consequatur odit nemo totam sunt ipsum ut incidunt quo dignissimos aut nulla vero, ratione omnis fugiat ipsam! Non sapiente consequatur excepturi eveniet iste, numquam esse quidem doloremque vero labore tempore consectetur! Praesentium magni maxime fugit enim nostrum sequi natus harum. Doloremque porro ad odio esse doloribus impedit fugit aliquam laboriosam quis nemo totam, dolor quisquam perferendis! Ad, praesentium maiores! Maxime soluta assumenda dignissimos excepturi culpa voluptate ab quae quod consequuntur quibusdam, veritatis, velit nostrum nemo facere sunt perspiciatis impedit.',
            'harga_per_bulan' => 100000,
            'kamar_tersedia' => 10,
            'user_id' => 1,
            'provinsi_id' => 12,
            'kota_id' => 1114,
            'gender_id' => 2,
        ]);

        Kost::create([
            'slug' => 'perempuan-kost',
            'nama' => 'Perempuan Kost',
            'alamat' => 'Jl. Perempuan No. 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam doloremque consequatur ipsa velit, ratione accusamus dolorum molestiae, culpa eligendi illum tempora molestias. Nisi consectetur necessitatibus ipsam ratione placeat, voluptatibus nobis velit molestiae voluptas optio qui dolorem doloribus pariatur, laboriosam unde distinctio dolore ipsa sit soluta odio. Incidunt sed eius impedit dolorum quaerat labore pariatur ullam aspernatur doloremque. Dolor ipsam necessitatibus in voluptatibus. Molestias nam laudantium doloremque laboriosam vitae accusamus minima quisquam non, quasi eaque qui dolores ducimus quidem veritatis voluptatum numquam dolorem. Ad dolorum rem tempora repudiandae, sed optio, distinctio cupiditate porro sit quos nulla temporibus voluptatum aliquid totam eius quam molestias reiciendis doloribus nemo magnam fugiat accusantium repellat impedit eum. Inventore veniam labore facilis dignissimos ad, illo nesciunt! Debitis quis velit impedit perferendis illo possimus est consequatur odit nemo totam sunt ipsum ut incidunt quo dignissimos aut nulla vero, ratione omnis fugiat ipsam! Non sapiente consequatur excepturi eveniet iste, numquam esse quidem doloremque vero labore tempore consectetur! Praesentium magni maxime fugit enim nostrum sequi natus harum. Doloremque porro ad odio esse doloribus impedit fugit aliquam laboriosam quis nemo totam, dolor quisquam perferendis! Ad, praesentium maiores! Maxime soluta assumenda dignissimos excepturi culpa voluptate ab quae quod consequuntur quibusdam, veritatis, velit nostrum nemo facere sunt perspiciatis impedit.',
            'harga_per_bulan' => 200000,
            'kamar_tersedia' => 10,
            'user_id' => 1,
            'provinsi_id' => 13,
            'kota_id' => 1164,
            'gender_id' => 3,
        ]);

        // Fasilitas - Kost
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

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 1,
        ]);

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 2,
        ]);

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 3,
        ]);

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 4,
        ]);

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 5,
        ]);

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 6,
        ]);

        KostFasilitas::create([
            'kost_id' => 3,
            'fasilitas_id' => 7,
        ]);

        KostFasilitas::create([
            'kost_id' => 5,
            'fasilitas_id' => 1,
        ]);

        KostFasilitas::create([
            'kost_id' => 5,
            'fasilitas_id' => 5,
        ]);
    }
}
