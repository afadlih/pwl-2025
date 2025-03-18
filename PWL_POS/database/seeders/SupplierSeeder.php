<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{{
    /**
     * Run the database seeds.    * Run the database seeds.
     */
    public function run(): voidd
    {
        $data = [
            ['level_id' => 1, 'level_kode' => 'ADM', 'level_nama' => 'Administrator'],       [
                'supplier_id' => 1,l_kode' => 'MNG', 'level_nama' => 'Manager'],supplier_id' => 1,
            ['level_id' => 3, 'level_kode' => 'STF', 'level_nama' => 'Staff/Kasir'],
        ];
        DB::table('m_level')->insert($data);
    }  ],
}
                'supplier_alamat' => 'Bandung',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'AM',
                'supplier_nama' => 'Ah Meng',
                'supplier_id' => 3,> 'Surabaya',
                'supplier_kode' => 'ELK3',
                'supplier_nama' => 'Supplier Elektronik 3',
                'supplier_alamat' => 'Surabaya',
            ],
        ];
        DB::table('m_supplier')->insert($data);    }}
