<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Karyawan extends Seeder
{
    public function run()
    {
        DB::table('karyawan')->insert([
            [
                'nama' => 'Andi Wijaya',
                'tmpt_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1990-05-12',
                'alamat' => 'Jl. Malioboro No. 10, Yogyakarta',
                'no_hp' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'tmpt_lahir' => 'Bandung',
                'tgl_lahir' => '1988-11-23',
                'alamat' => 'Jl. Dago Atas No. 5, Bandung',
                'no_hp' => '082345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'tmpt_lahir' => 'Jakarta',
                'tgl_lahir' => '1995-07-30',
                'alamat' => 'Jl. Sudirman No. 20, Jakarta',
                'no_hp' => '083456789012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
