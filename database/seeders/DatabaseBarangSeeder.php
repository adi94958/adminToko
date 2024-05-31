<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_barang')->insert([
            ['kode_barang' => 'TPW-1', 'nama_barang' => 'Tie Knit White', 'unit' => 22, 'harga_beli' => 300000, 'harga_jual' => 490000],
            ['kode_barang' => 'TPW-2', 'nama_barang' => 'Baloon Top', 'unit' => 20, 'harga_beli' => 200000, 'harga_jual' => 399000],
            ['kode_barang' => 'TPW-3', 'nama_barang' => 'Tartan Pink', 'unit' => 30, 'harga_beli' => 200000, 'harga_jual' => 399000],
            ['kode_barang' => 'TPW-4', 'nama_barang' => 'Pinky', 'unit' => 50, 'harga_beli' => 300000, 'harga_jual' => 490000],
            ['kode_barang' => 'TPW-5', 'nama_barang' => 'Printed Navy', 'unit' => 15, 'harga_beli' => 250000, 'harga_jual' => 399000],
            ['kode_barang' => 'PNT-1', 'nama_barang' => 'F Black', 'unit' => 40, 'harga_beli' => 400000, 'harga_jual' => 580000],
            ['kode_barang' => 'PNT-2', 'nama_barang' => 'W Style', 'unit' => 50, 'harga_beli' => 400000, 'harga_jual' => 599000],
            ['kode_barang' => 'PNT-3', 'nama_barang' => 'J Old', 'unit' => 40, 'harga_beli' => 400000, 'harga_jual' => 580000],
            ['kode_barang' => 'PNT-4', 'nama_barang' => 'Leather P', 'unit' => 20, 'harga_beli' => 400000, 'harga_jual' => 550000],
            ['kode_barang' => 'PNT-5', 'nama_barang' => 'Simple one', 'unit' => 35, 'harga_beli' => 400000, 'harga_jual' => 500000],
            ['kode_barang' => 'PJM-1', 'nama_barang' => 'Warm', 'unit' => 50, 'harga_beli' => 300000, 'harga_jual' => 450000],
            ['kode_barang' => 'PJM-2', 'nama_barang' => 'Pink stripe', 'unit' => 23, 'harga_beli' => 200000, 'harga_jual' => 375000],
            ['kode_barang' => 'PJM-3', 'nama_barang' => 'Tartan blue', 'unit' => 20, 'harga_beli' => 200000, 'harga_jual' => 380000],
            ['kode_barang' => 'PJM-4', 'nama_barang' => 'Soft Tartan', 'unit' => 26, 'harga_beli' => 200000, 'harga_jual' => 375000],
            ['kode_barang' => 'PJM-5', 'nama_barang' => 'Long pink stripe', 'unit' => 35, 'harga_beli' => 300000, 'harga_jual' => 425000],
            ['kode_barang' => 'OTH-1', 'nama_barang' => 'Bump', 'unit' => 12, 'harga_beli' => 400000, 'harga_jual' => 599000],
            ['kode_barang' => 'OTH-2', 'nama_barang' => 'Vestie', 'unit' => 20, 'harga_beli' => 100000, 'harga_jual' => 299000],
            ['kode_barang' => 'OTH-3', 'nama_barang' => 'Blueish', 'unit' => 35, 'harga_beli' => 200000, 'harga_jual' => 360000],
            ['kode_barang' => 'OTH-4', 'nama_barang' => 'Choco', 'unit' => 20, 'harga_beli' => 450000, 'harga_jual' => 699000],
            ['kode_barang' => 'OTH-5', 'nama_barang' => 'Grey Hoodie', 'unit' => 16, 'harga_beli' => 300000, 'harga_jual' => 450000],
            ['kode_barang' => 'DRS-1', 'nama_barang' => 'Self Potrait', 'unit' => 20, 'harga_beli' => 500000, 'harga_jual' => 765000],
            ['kode_barang' => 'DRS-2', 'nama_barang' => 'red square', 'unit' => 19, 'harga_beli' => 400000, 'harga_jual' => 699000],
            ['kode_barang' => 'DRS-3', 'nama_barang' => 'Summer', 'unit' => 23, 'harga_beli' => 300000, 'harga_jual' => 599000],
            ['kode_barang' => 'DRS-4', 'nama_barang' => 'Jeans bow', 'unit' => 27, 'harga_beli' => 500000, 'harga_jual' => 710000],
            ['kode_barang' => 'DRS-5', 'nama_barang' => 'Brukat', 'unit' => 25, 'harga_beli' => 500000, 'harga_jual' => 799000],
            ['kode_barang' => 'SKR-1', 'nama_barang' => 'Sage kirt', 'unit' => 20, 'harga_beli' => 600000, 'harga_jual' => 860000],
            ['kode_barang' => 'SKR-2', 'nama_barang' => 'Cargo kirt', 'unit' => 30, 'harga_beli' => 400000, 'harga_jual' => 760000],
            ['kode_barang' => 'SKR-3', 'nama_barang' => 'Emerland', 'unit' => 30, 'harga_beli' => 600000, 'harga_jual' => 855000],
            ['kode_barang' => 'SKR-4', 'nama_barang' => 'Y2K', 'unit' => 20, 'harga_beli' => 600000, 'harga_jual' => 799000],
            ['kode_barang' => 'SKR-5', 'nama_barang' => 'Skort', 'unit' => 19, 'harga_beli' => 500000, 'harga_jual' => 700000],
            ['kode_barang' => 'MCS-1', 'nama_barang' => 'Pinky Set', 'unit' => 29, 'harga_beli' => 500000, 'harga_jual' => 799000],
            ['kode_barang' => 'MCS-2', 'nama_barang' => 'Girlmore', 'unit' => 38, 'harga_beli' => 600000, 'harga_jual' => 899000],
            ['kode_barang' => 'MCS-3', 'nama_barang' => 'Clueless', 'unit' => 30, 'harga_beli' => 600000, 'harga_jual' => 890000],
            ['kode_barang' => 'MCS-4', 'nama_barang' => 'Diana set', 'unit' => 50, 'harga_beli' => 600000, 'harga_jual' => 899000],
            ['kode_barang' => 'MCS-5', 'nama_barang' => 'London', 'unit' => 60, 'harga_beli' => 600000, 'harga_jual' => 899000],
            ['kode_barang' => 'SND-1', 'nama_barang' => 'Black pink', 'unit' => 45, 'harga_beli' => 500000, 'harga_jual' => 799000],
            ['kode_barang' => 'SND-2', 'nama_barang' => 'Choquette', 'unit' => 36, 'harga_beli' => 500000, 'harga_jual' => 780000],
            ['kode_barang' => 'SND-3', 'nama_barang' => 'Cherry', 'unit' => 55, 'harga_beli' => 600000, 'harga_jual' => 800000],
            ['kode_barang' => 'SND-4', 'nama_barang' => 'Slip on', 'unit' => 34, 'harga_beli' => 500000, 'harga_jual' => 760000],
            ['kode_barang' => 'SND-5', 'nama_barang' => 'Heels', 'unit' => 45, 'harga_beli' => 600000, 'harga_jual' => 880000],
            ['kode_barang' => 'SHO-1', 'nama_barang' => 'White boots', 'unit' => 35, 'harga_beli' => 700000, 'harga_jual' => 1400000],
            ['kode_barang' => 'SHO-2', 'nama_barang' => 'Adidas', 'unit' => 46, 'harga_beli' => 800000, 'harga_jual' => 999000],
            ['kode_barang' => 'SHO-3', 'nama_barang' => 'Dochmart', 'unit' => 39, 'harga_beli' => 900000, 'harga_jual' => 1100000],
            ['kode_barang' => 'SHO-4', 'nama_barang' => 'Adidas Choquette', 'unit' => 45, 'harga_beli' => 800000, 'harga_jual' => 1100000],
            ['kode_barang' => 'SHO-5', 'nama_barang' => 'Samba', 'unit' => 37, 'harga_beli' => 800000, 'harga_jual' => 1300000],
            ['kode_barang' => 'ACC-1', 'nama_barang' => 'Cat beanie', 'unit' => 45, 'harga_beli' => 100000, 'harga_jual' => 200000],
            ['kode_barang' => 'ACC-2', 'nama_barang' => 'MU', 'unit' => 36, 'harga_beli' => 70000, 'harga_jual' => 150000],
            ['kode_barang' => 'ACC-3', 'nama_barang' => 'Green hat', 'unit' => 42, 'harga_beli' => 70000, 'harga_jual' => 150000],
            ['kode_barang' => 'ACC-4', 'nama_barang' => 'Scarf', 'unit' => 32, 'harga_beli' => 150000, 'harga_jual' => 400000],
            ['kode_barang' => 'ACC-5', 'nama_barang' => 'Star earrings', 'unit' => 10, 'harga_beli' => 150000, 'harga_jual' => 300000],
        ]);
    }
}
