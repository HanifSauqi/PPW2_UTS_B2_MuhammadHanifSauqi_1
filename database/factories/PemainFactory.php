<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id'=>$this->faker->unique()->randomNumber(),
            'nama_pemain' => $this->faker->word(), // Menggunakan faker word() untuk nama barang
            'no_punggung' => $this->faker->randomFloat(2, 10, 1000), // Menggunakan faker randomFloat() untuk harga
            'posisi' => $this->faker->word(), // Menggunakan faker word() untuk nama barang
        ];
    }
}
