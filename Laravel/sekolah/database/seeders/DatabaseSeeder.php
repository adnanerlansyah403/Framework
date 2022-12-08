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

        $dataUser = [
            [
                'name' => 'Farid Maulana',
                'email' => 'faridmaul@gmail.com',
                'password' => bcrypt('12345'),
                'tempat_lahir' => 'Indramayu',
                'tanggal_lahir' => '19-07-2003',
                'nisn' => '62718212891',
                'alamat' => 'Kp. Jagung No. 19 RT 02/ RW 09, Desa. Jagung, Kecamatan. Indramayu',
                'tingkatan' => 'smp',
                'gender' => 'L',
                'role' => '1',
                'id_sekolah' => null,
            ],
        ];

        $dataSekolah = [
            [
                'name' => 'SDN - Cikarang Kota 01',
                'email' => 'cikarangkota01@gmail.com',
                'alamat' => 'Kp. Harapan Baru RT 01 / RW 09, Desa. Cikarang kota, Kecamatan. Cikarang Utara, Kabupaten. Bekasi',
                'tingkatan' => 'sd',
                'no_telp' => 81957440893,
            ],
            [
                'name' => 'SMP - Cikarang Kota 02',
                'email' => 'cikarangkota02@gmail.com',
                'alamat' => 'Kp. Harapan Baru RT 01 / RW 09, Desa. Cikarang kota, Kecamatan. Cikarang Utara, Kabupaten. Bekasi',
                'tingkatan' => 'smp',
                'no_telp' => 81957440893,
            ],
            [
                'name' => 'SMK - Cikarang Kota 03',
                'email' => 'cikarangkota03@gmail.com',
                'alamat' => 'Kp. Harapan Baru RT 01 / RW 09, Desa. Cikarang kota, Kecamatan. Cikarang Utara, Kabupaten. Bekasi',
                'tingkatan' => 'smk',
                'no_telp' => 81957440893,
            ],
        ];

        foreach ($dataSekolah as $key => $value) {
            Sekolah::create($value);
        }

    }
}
