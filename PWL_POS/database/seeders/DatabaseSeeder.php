<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Truncate all tables
        DB::table('m_barang')->truncate();
        DB::table('m_kategori')->truncate();
        DB::table('m_level')->truncate();
        DB::table('m_user')->truncate();
        DB::table('t_penjualan')->truncate();
        DB::table('t_penjualan_detail')->truncate();
        DB::table('t_stok')->truncate();
        DB::table('m_supplier')->truncate();

        // Run seeders
        $this->call([
            KategoriSeeder::class,
            BarangSeeder::class,
            LevelSeeder::class,
            UserSeeder::class,
            PenjualanSeeder::class,
            PenjualanDetailSeeder::class,
            StokSeeder::class,
            SupplierSeeder::class,
        ]);

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
