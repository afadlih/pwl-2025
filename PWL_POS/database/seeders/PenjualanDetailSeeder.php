<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Penjualan 1 - Elektronik
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 101, 'harga' => 9500000, 'jumlah' => 1], // Laptop ASUS
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 102, 'harga' => 3500000, 'jumlah' => 2], // Smartphone Samsung
            
            // Penjualan 2 - Furniture
            ['detail_id' => 3, 'penjualan_id' => 2, 'barang_id' => 201, 'harga' => 1000000, 'jumlah' => 2], // Meja Kerja
            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 202, 'harga' => 1500000, 'jumlah' => 1], // Kursi Gaming
            
            // Penjualan 3 - Pakaian
            ['detail_id' => 5, 'penjualan_id' => 3, 'barang_id' => 301, 'harga' => 200000, 'jumlah' => 3], // Kemeja Formal
            ['detail_id' => 6, 'penjualan_id' => 3, 'barang_id' => 302, 'harga' => 275000, 'jumlah' => 2], // Celana Jeans
            
            // Penjualan 4 - Buku
            ['detail_id' => 7, 'penjualan_id' => 4, 'barang_id' => 401, 'harga' => 100000, 'jumlah' => 5], // Novel Fiksi
            ['detail_id' => 8, 'penjualan_id' => 4, 'barang_id' => 402, 'harga' => 185000, 'jumlah' => 2], // Buku Pemrograman
            
            // Penjualan 5 - Peralatan Olahraga
            ['detail_id' => 9, 'penjualan_id' => 5, 'barang_id' => 501, 'harga' => 250000, 'jumlah' => 3], // Bola Basket
            ['detail_id' => 10, 'penjualan_id' => 5, 'barang_id' => 502, 'harga' => 375000, 'jumlah' => 2], // Raket Badminton
        ];
        
        DB::table('t_penjualan_detail')->insert($data);
    }
}