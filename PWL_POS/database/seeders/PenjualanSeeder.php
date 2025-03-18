<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Ahmad',
                'penjualan_kode' => 'PK1',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Fadlih',
                'penjualan_kode' => 'PK2',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Wahyu',
                'penjualan_kode' => 'PK3',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Sardana',
                'penjualan_kode' => 'PK4',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PK5',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'PK6',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Rina',
                'penjualan_kode' => 'PK7',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Dewi',
                'penjualan_kode' => 'PK8',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PK9',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Lina',
                'penjualan_kode' => 'PK10',
                'penjualan_tanggal' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
