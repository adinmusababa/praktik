<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Produk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // gunakan locale Indonesia

        for ($i = 1; $i <= 50; $i++) { // bikin 50 produk dummy
            DB::table('produk')->insert([
                'nama'       => $faker->words(3, true), // nama produk 3 kata random
                'deskripsi'  => $faker->sentence(10),   // deskripsi acak
                'harga'      => $faker->numberBetween(50000, 5000000), // harga 50rb - 5jt
                'stok'       => $faker->numberBetween(0, 100), // stok 0 - 100
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
