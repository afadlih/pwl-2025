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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'TV',
                'barang_nama' => 'Televisi',
                'harga_beli' => 1500000,
                'harga_jual' => 1600000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'FR',
                'barang_nama' => 'Kulkas',
                'harga_beli' => 2000000,
                'harga_jual' => 2100000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'WM',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 1800000,
                'harga_jual' => 1900000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'AC',
                'barang_nama' => 'Air Conditioner',
                'harga_beli' => 2500000,
                'harga_jual' => 2600000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'MW',
                'barang_nama' => 'Microwave',
                'harga_beli' => 800000,
                'harga_jual' => 850000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'VC',
                'barang_nama' => 'Vacuum Cleaner',
                'harga_beli' => 700000,
                'harga_jual' => 750000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 1,
                'barang_kode' => 'BL',
                'barang_nama' => 'Blender',
                'harga_beli' => 300000,
                'harga_jual' => 350000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 1,
                'barang_kode' => 'IR',
                'barang_nama' => 'Setrika',
                'harga_beli' => 150000,
                'harga_jual' => 170000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 1,
                'barang_kode' => 'FN',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 200000,
                'harga_jual' => 220000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 1,
                'barang_kode' => 'HT',
                'barang_nama' => 'Home Theater',
                'harga_beli' => 3000000,
                'harga_jual' => 3200000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
