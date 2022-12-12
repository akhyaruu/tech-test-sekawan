<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'role_id' => '1',
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ],
            [
                'role_id' => '2',
                'nama' => 'Muammar Itqon',
                'email' => 'itqon@gmail.com',
                'password' => bcrypt('itqon123'),
            ],
            [
                'role_id' => '3',
                'nama' => 'Syifaul Qolbi',
                'email' => 'qolbi@gmail.com',
                'password' => bcrypt('qolbi123'),
            ]
        ]);
    }
}