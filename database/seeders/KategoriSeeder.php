<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            [
                'kode' => 'IB',
                'nama_kategori' => 'Internet bisnis'
            ],
            [
                'kode' => 'OP',
                'nama_kategori' => 'Operasional'
            ],
            [
                'kode' => 'SDM',
                'nama_kategori' => 'SDM'
            ],
            [
                'kode' => 'PSR',
                'nama_kategori' => 'Pemasaran'
            ],
        ]);
    }
}
