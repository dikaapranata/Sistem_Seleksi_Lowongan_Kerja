<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loker>
 */
class LokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idperusahaan' => fake()->name(),
            'nama' => fake()->name(),
            'tipe' => fake()->word(),
            'usia_min' => fake()->numberBetween(17,20),
            'usia_max' => fake()->numberBetween(30,50),
            'gaji_min' => 1000000,
            'gaji_max' => 50000000,
            'nama_cp' => fake()->name(),
            'email_cp' => fake()->email(),
            'no_telp_cp' => fake()->phoneNumber(),
            'tgl_update' => fake()->date('Y-m-d'),
            'tgl_aktif' => fake()->date('Y-m-d'),
            'tgl_tutup' => fake()->date('Y-m-d'),
            'status' => 1
        ];
    }
}
