<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasePenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Penjualan data to be seeded
        DB::table('database_penjualan')->insert([
            [
                'kode_transaksi' => 'FJ-001',
                'tanggal_transaksi' => '2024-01-03',
                'kode_customer' => 'CST-001',
            ],
            [
                'kode_transaksi' => 'FJ-002',
                'tanggal_transaksi' => '2024-03-03',
                'kode_customer' => 'CST-002',
            ],
            [
                'kode_transaksi' => 'FJ-003',
                'tanggal_transaksi' => '2024-05-03',
                'kode_customer' => 'CST-005',
            ],
            [
                'kode_transaksi' => 'FJ-004',
                'tanggal_transaksi' => '2024-04-15',
                'kode_customer' => 'CST-004',
            ],
            [
                'kode_transaksi' => 'FJ-005',
                'tanggal_transaksi' => '2023-04-15',
                'kode_customer' => 'CST-004',
            ],
        ]);

        DB::table('database_penjualan_detail')->insert([
            [
                'kode_transaksi' => 'FJ-001',
                'kode_barang' => 'ACC-1',
                'jumlah' => 2,
            ],
            [
                'kode_transaksi' => 'FJ-001',
                'kode_barang' => 'ACC-2',
                'jumlah' => 4,
            ],
            [
                'kode_transaksi' => 'FJ-002',
                'kode_barang' => 'ACC-3',
                'jumlah' => 5,
            ],
            [
                'kode_transaksi' => 'FJ-002',
                'kode_barang' => 'DRS-1',
                'jumlah' => 2,
            ],
            [
                'kode_transaksi' => 'FJ-003',
                'kode_barang' => 'DRS-2',
                'jumlah' => 2,
            ],
            [
                'kode_transaksi' => 'FJ-004',
                'kode_barang' => 'DRS-3',
                'jumlah' => 4,
            ],
            [
                'kode_transaksi' => 'FJ-005',
                'kode_barang' => 'DRS-4',
                'jumlah' => 2,
            ],
            [
                'kode_transaksi' => 'FJ-005',
                'kode_barang' => 'MCS-1',
                'jumlah' => 1,
            ],
        ]);
    }
}
