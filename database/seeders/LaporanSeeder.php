<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'detail' => 'jaringan lemot',
                'pelanggans_id' => 1,
                'status_id' => 1
            ],
            // [
            //     'tanggal' => Carbon::createFromFormat('d/m/Y', '22/02/2020')->toDateTimeString(),
            //     'detail' => 'jaringan lemot',
            //     'pelanggans_id' => 1,
            //     'status_id' => 2
            // ]
        ]);
    }
}
