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
                'barang_kode' => 'ELK01',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 1500000,
                'harga_jual' => 2500000,
               
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELK02',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 800000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PNA01',
                'barang_nama' => 'Hijab Pasmina',
                'harga_beli' => 20000,
                'harga_jual' => 27000,
                
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PNA02',
                'barang_nama' => 'Sarung',
                'harga_beli' => 78000,
                'harga_jual' => 90000,
                
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MNH01',
                'barang_nama' => 'Boneka Beruang',
                'harga_beli' => 55000,
                'harga_jual' => 100000,
                
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MNH02',
                'barang_nama' => 'Robot',
                'harga_beli' => 44000,
                'harga_jual' => 60000,
                
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'KHS01',
                'barang_nama' => 'Masker',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'KHS02',
                'barang_nama' => 'Vitamin',
                'harga_beli' => 15000,
                'harga_jual' => 22000,
                
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PHN01',
                'barang_nama' => 'Kamus Bahasa',
                'harga_beli' => 30000,
                'harga_jual' => 45000,
                
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PHN02',
                'barang_nama' => 'Buku Sejarah',
                'harga_beli' => 55000,
                'harga_jual' => 70000,
                
            ],
        ];
        DB::table('m_barang')->insert($data); 
    }
}
