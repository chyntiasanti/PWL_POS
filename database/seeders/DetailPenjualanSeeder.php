<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 88000,
                'jumlah' => 20,
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 31000,
                'jumlah' => 90,
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 64000,
                'jumlah' => 30,
            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 74000,
                'jumlah' => 80,
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 19000,
                'jumlah' => 31,
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 82000,
                'jumlah' => 62,
            ],
            [
                'detail_id' => 7,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 24000,
                'jumlah' => 11,
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 49000,
                'jumlah' => 54,
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 49000,
                'jumlah' => 18,
            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 29000,
                'jumlah' => 66,
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 11000,
                'jumlah' => 11,
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 53000,
                'jumlah' => 71,
            ],
            [
                'detail_id' => 13,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 61000,
                'jumlah' => 74,
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 29000,
                'jumlah' => 63,
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 73000,
                'jumlah' => 21,
            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 16000,
                'jumlah' => 9,
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 82000,
                'jumlah' => 39,
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 50000,
                'jumlah' => 19,
            ],
            [
                'detail_id' => 19,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 97000,
                'jumlah' => 52,
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 47000,
                'jumlah' => 21,
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 17200,
                'jumlah' => 75,
            ],
            [
                'detail_id' => 22,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 82700,
                'jumlah' => 66,
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 71300,
                'jumlah' => 44,
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 83000,
                'jumlah' => 12,
            ],
            [
                'detail_id' => 25,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 98100,
                'jumlah' => 49,
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 23800,
                'jumlah' => 23,
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 21890,
                'jumlah' => 61,
            ],
            [
                'detail_id' => 28,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 62600,
                'jumlah' => 27,
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 32000,
                'jumlah' => 29,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 29180,
                'jumlah' => 62,
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data); 
    }
}
