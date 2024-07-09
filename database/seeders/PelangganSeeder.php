<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            [
                'username' => 'aksara',
                'password' => 'aksa123',
                'nama' => 'Bella Aksara',
                'alamat' => 'Jl. Bunga no. 20',
                'no_telp' => '08123456789',
            ],
            [
                'username' => 'melati',
                'password' => 'bungamelati',
                'nama' => 'Jasmine',
                'alamat' => 'Jl. Melati no. 7',
                'no_telp' => '0812347789',
            ],
        ]);
    }
}
