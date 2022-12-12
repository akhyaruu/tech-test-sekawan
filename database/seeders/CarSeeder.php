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
            ],
        ]);
    }
}