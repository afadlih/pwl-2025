<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levelData = [
            ['level_id' => 1, 'level_kode' => 'ADM', 'level_nama' => 'Administrator'],
            ['level_id' => 2, 'level_kode' => 'MNG', 'level_nama' => 'Manager'],
            ['level_id' => 3, 'level_kode' => 'STF', 'level_nama' => 'Staff/Kasir'],
        ];
        DB::table('m_level')->insert($levelData);

        $supplierData = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP1',
                'supplier_nama' => 'Supplier 1',
                'supplier_alamat' => 'Bandung',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP2',
                'supplier_nama' => 'Supplier 2',
                'supplier_alamat' => 'Jakarta',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'ELK3',
                'supplier_nama' => 'Supplier Elektronik 3',
                'supplier_alamat' => 'Surabaya',
            ],
        ];
        DB::table('m_supplier')->insert($supplierData);
    }
}
