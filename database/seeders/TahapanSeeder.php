<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tahapans')->insert([
            'id' => 1,
            'nama' => 'Menunggu seleksi administrasi',
        ]);

        DB::table('tahapans')->insert([
            'id' => 2,
            'nama' => 'Seleksi administrasi',
        ]);

        DB::table('tahapans')->insert([
            'id' => 3,
            'nama' => 'Seleksi wawancara'
        ]);
    }
}
