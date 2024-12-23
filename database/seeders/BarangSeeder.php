<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'namabarang' => 'Iphone',
                'hargabarang' => '5000000',
                'deskripsibarang' => 'Alat Elektronik',
                'satuan_id' => '1'
            ],
        ]);
    }
}
