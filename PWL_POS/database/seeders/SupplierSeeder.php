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
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT. Electronic Solution', 'supplier_alamat' => 'Jl. Elektronik No. 123, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP002', 'supplier_nama' => 'CV. Furniture Jaya', 'supplier_alamat' => 'Jl. Mebel No. 45, Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP003', 'supplier_nama' => 'PT. Fashion Indonesia', 'supplier_alamat' => 'Jl. Mode No. 78, Surabaya'],
            ['supplier_id' => 4, 'supplier_kode' => 'SUP004', 'supplier_nama' => 'Toko Buku Media', 'supplier_alamat' => 'Jl. Literasi No. 32, Yogyakarta'],
            ['supplier_id' => 5, 'supplier_kode' => 'SUP005', 'supplier_nama' => 'CV. Sport Equipment', 'supplier_alamat' => 'Jl. Olahraga No. 88, Semarang'],
        ];
        
        DB::table('m_supplier')->insert($data);
        
    }
}