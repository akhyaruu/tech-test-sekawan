<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarType::insert([
            ['nama' => 'angkutan orang'],
            ['nama' => 'angkutan barang'],
        ]);
    }
}