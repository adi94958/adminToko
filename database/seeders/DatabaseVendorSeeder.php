<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseVendorSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_vendor')->insert([
            [
                'kode_vendor' => 'VND-001',
                'nama_vendor' => 'Ninnete',
                'alamat' => 'Jakarta Barat',
                'no_telp' => '999-887-668',
            ],
            [
                'kode_vendor' => 'VND-002',
                'nama_vendor' => 'Our Label',
                'alamat' => 'Thailand',
                'no_telp' => '200-765-900',
            ],
            [
                'kode_vendor' => 'VND-003',
                'nama_vendor' => 'NakedbyV',
                'alamat' => 'Vietnam',
                'no_telp' => '567-900-899',
            ],
            [
                'kode_vendor' => 'VND-004',
                'nama_vendor' => 'Vlrfash',
                'alamat' => 'Bandung',
                'no_telp' => '999-333-678',
            ],
            [
                'kode_vendor' => 'VND-005',
                'nama_vendor' => 'Muninsha',
                'alamat' => 'Korea Selatan',
                'no_telp' => '776-899-600',
            ],
        ]);
    }
}
