<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'ELK', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 2, 'kategori_kode' => 'PNA', 'kategori_nama' => 'Pakaian/Aksesoris'],
            ['kategori_id' => 3, 'kategori_kode' => 'MNH', 'kategori_nama' => 'Mainan/Hiburan'],
            ['kategori_id' => 4, 'kategori_kode' => 'KHS', 'kategori_nama' => 'Kesehatan'],
            ['kategori_id' => 5, 'kategori_kode' => 'PHN', 'kategori_nama' => 'Pengetahuan'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
