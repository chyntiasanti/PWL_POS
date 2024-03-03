<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Ibu Laila',
                'penjualan_kode' => 'PJK01',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Bapak Handoko',
                'penjualan_kode' => 'PJK02',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Ibu Laura',
                'penjualan_kode' => 'PJK03',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Bapak Basri',
                'penjualan_kode' => 'PJK04',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Ibu Aini',
                'penjualan_kode' => 'PJK05',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Bapak Sugianto',
                'penjualan_kode' => 'PJK06',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Ibu Titin',
                'penjualan_kode' => 'PJK07',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Bapak Renald',
                'penjualan_kode' => 'PJK08',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Ibu Jamik',
                'penjualan_kode' => 'PJK09',
                'penjualan_tanggal' => new DateTime(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Bapak Edy',
                'penjualan_kode' => 'PJK010',
                'penjualan_tanggal' => new DateTime(),
            ],
        ];
        DB::table('t_penjualan')->insert($data); 
    }
}
