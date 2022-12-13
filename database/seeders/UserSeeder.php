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
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
            ],
            [
                'role_id' => '2',
                'nama' => 'Muammar Adam',
                'email' => 'adam@gmail.com',
                'password' => bcrypt('adam'),
            ],
            [
                'role_id' => '3',
                'nama' => 'Syifaul Hanif',
                'email' => 'hanif@gmail.com',
                'password' => bcrypt('hanif'),
            ]
        ]);
    }
}