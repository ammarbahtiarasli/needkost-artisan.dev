<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kost>
 */
class KostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'slug' => $this->faker->slug,
            'alamat' => $this->faker->address,
            'harga' => $this->faker->numberBetween(100000, 1000000),
            'deskripsi' => $this->faker->text,
            'kamar_tersedia' => $this->faker->numberBetween(1, 10),
            'id_user' => 1,
            'kota' => 'Jakarta',
            'kecamatan' => 'Jakarta Selatan',
            'id_gender' => 1,
        ];
    }
}
