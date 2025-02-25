<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Makanan
            ['stok_id' => 1, 'supplier_id' => 1, 'barang_id' => 1, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 100],  // Nasi Goreng
            ['stok_id' => 2, 'supplier_id' => 1, 'barang_id' => 2, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 100],  // Mie Goreng
            ['stok_id' => 3, 'supplier_id' => 1, 'barang_id' => 3, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 100],  // Ayam Goreng
            
            // Minuman
            ['stok_id' => 4, 'supplier_id' => 2, 'barang_id' => 4, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 150],  // Es Teh
            ['stok_id' => 5, 'supplier_id' => 2, 'barang_id' => 5, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 150],  // Es Jeruk
            ['stok_id' => 6, 'supplier_id' => 2, 'barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 150],  // Es Campur
            
            // Snack
            ['stok_id' => 7, 'supplier_id' => 3, 'barang_id' => 7, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 200],  // Kentang Goreng
            ['stok_id' => 8, 'supplier_id' => 3, 'barang_id' => 8, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 200],  // Pisang Goreng
            ['stok_id' => 9, 'supplier_id' => 3, 'barang_id' => 9, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 200],  // Tempe Goreng
        ];
        
        DB::table('t_stok')->insert($data);
    }
}
