<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Elektronik
            ['barang_id' => 101, 'barang_kode' => 'ELK001', 'barang_nama' => 'Laptop ASUS', 'harga_beli' => 8000000, 'harga_jual' => 9500000, 'kategori_id' => 1],
            ['barang_id' => 102, 'barang_kode' => 'ELK002', 'barang_nama' => 'Smartphone Samsung', 'harga_beli' => 3000000, 'harga_jual' => 3500000, 'kategori_id' => 1],
            ['barang_id' => 103, 'barang_kode' => 'ELK003', 'barang_nama' => 'Smart TV LG', 'harga_beli' => 5000000, 'harga_jual' => 6000000, 'kategori_id' => 1],
            ['barang_id' => 104, 'barang_kode' => 'ELK004', 'barang_nama' => 'Printer Epson', 'harga_beli' => 1500000, 'harga_jual' => 1800000, 'kategori_id' => 1],
            ['barang_id' => 105, 'barang_kode' => 'ELK005', 'barang_nama' => 'Headphone Sony', 'harga_beli' => 500000, 'harga_jual' => 700000, 'kategori_id' => 1],
            
            // Furniture
            ['barang_id' => 201, 'barang_kode' => 'FRN001', 'barang_nama' => 'Meja Kerja', 'harga_beli' => 800000, 'harga_jual' => 1000000, 'kategori_id' => 2],
            ['barang_id' => 202, 'barang_kode' => 'FRN002', 'barang_nama' => 'Kursi Gaming', 'harga_beli' => 1200000, 'harga_jual' => 1500000, 'kategori_id' => 2],
            ['barang_id' => 203, 'barang_kode' => 'FRN003', 'barang_nama' => 'Lemari Pakaian', 'harga_beli' => 2000000, 'harga_jual' => 2500000, 'kategori_id' => 2],
            ['barang_id' => 204, 'barang_kode' => 'FRN004', 'barang_nama' => 'Rak Buku', 'harga_beli' => 400000, 'harga_jual' => 550000, 'kategori_id' => 2],
            ['barang_id' => 205, 'barang_kode' => 'FRN005', 'barang_nama' => 'Sofa', 'harga_beli' => 3000000, 'harga_jual' => 3750000, 'kategori_id' => 2],
        ];
        
        DB::table('m_barang')->insert($data);
    }
}