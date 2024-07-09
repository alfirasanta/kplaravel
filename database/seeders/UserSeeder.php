<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Aksara',
                'email' => 'aksa@gmail.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Aru',
                'email' => 'aru@gmail.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
