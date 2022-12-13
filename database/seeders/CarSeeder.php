<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::insert([
            [
                'nama' => 'Daihatsu Xenia',
                'tipe_id' => '1',
                'merek' => 'Daihatsu',
                'warna' => 'Hitam',
                'cc_mesin' => '1200',
                'jenis_bahan_bakar' => 'Gasoline',
                'kapasitas_tangki' => '40',
                'tahun_keluar' => '2017',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nama' => 'Toyota Innova',
                'tipe_id' => '1',
                'merek' => 'Toyota',
                'warna' => 'Abu Abu',
                'cc_mesin' => '1800',
                'jenis_bahan_bakar' => 'Gasoline',
                'kapasitas_tangki' => '60',
                'tahun_keluar' => '2019',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Daihatsu Sigra',
                'tipe_id' => '1',
                'merek' => 'Daihatsu',
                'warna' => 'Putih',
                'cc_mesin' => '1200',
                'jenis_bahan_bakar' => 'Gasoline',
                'kapasitas_tangki' => '40',
                'tahun_keluar' => '2019',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mitsubishi Pajero',
                'tipe_id' => '1',
                'merek' => 'Mitsubushi',
                'warna' => 'Hitam',
                'cc_mesin' => '2500',
                'jenis_bahan_bakar' => 'Gasoline',
                'kapasitas_tangki' => '78',
                'tahun_keluar' => '2016',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}