<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->truncate();
        
        DB::table('m_kategori')->insert([
            [
                'kategori_id' => 1,
                'kategori_kode' => 'ELK',
                'kategori_nama' => 'Elektronik'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'FRN',
                'kategori_nama' => 'Furniture'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'CLT',
                'kategori_nama' => 'Pakaian'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'BKS',
                'kategori_nama' => 'Buku'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'SPT',
                'kategori_nama' => 'Peralatan Olahraga'
            ],
        ]);
    }
}
