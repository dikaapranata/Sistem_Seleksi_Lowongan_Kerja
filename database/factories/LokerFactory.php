<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        $loker_name = fake()->name();
        $pendidikan_list = [User::PEND_SMA, User::PEND_D1, User::PEND_D2, User::PEND_D3, User::PEND_D4, User::PEND_S1, User::PEND_S2, User::PEND_S3];

        return [
            'idloker' => Str::slug($loker_name),
            'idperusahaan' => fake()->name(),
            'nama' => $loker_name,
            'tipe' => fake()->word(),
            'usia_min' => fake()->numberBetween(17,20),
            'usia_max' => fake()->numberBetween(30,50),
            'gaji_min' => rand(1000000,10000000),
            'gaji_max' => rand(11000000 ,100000000),
            'nama_cp' => fake()->name(),
            'pendidikan' => $pendidikan_list[array_rand($pendidikan_list)],
            'email_cp' => fake()->email(),
            'no_telp_cp' => fake()->phoneNumber(),
            'tgl_update' => Carbon::now(),
            'tgl_aktif' => fake()->dateTimeBetween('-1 week', '+1 year')->format('Y-m-d'),
            'tgl_tutup' => fake()->date('Y-m-d'),
            'status' => 1
        ];
    }
}
