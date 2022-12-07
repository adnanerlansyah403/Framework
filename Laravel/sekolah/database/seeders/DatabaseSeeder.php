<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $dataSekolah = [
            [
                'name' => 'SDN - Cikarang Kota 01',
                'email' => 'cikarangkota01@gmail.com',
                'alamat' => 'Kp. Harapan Baru RT 01 / RW 09, Desa. Cikarang kota, Kecamatan. Cikarang Utara, Kabupaten. Bekasi',
                'no_telp' => 81957440893,
            ],
            [
                'name' => 'SMP - Cikarang Kota 02',
                'email' => 'cikarangkota02@gmail.com',
                'alamat' => 'Kp. Harapan Baru RT 01 / RW 09, Desa. Cikarang kota, Kecamatan. Cikarang Utara, Kabupaten. Bekasi',
                'no_telp' => 81957440893,
            ],
            [
                'name' => 'SMK - Cikarang Kota 03',
                'email' => 'cikarangkota03@gmail.com',
                'alamat' => 'Kp. Harapan Baru RT 01 / RW 09, Desa. Cikarang kota, Kecamatan. Cikarang Utara, Kabupaten. Bekasi',
                'no_telp' => 81957440893,
            ],
        ];

        foreach ($dataSekolah as $key => $value) {
            Sekolah::create($value);
        }

    }
}
