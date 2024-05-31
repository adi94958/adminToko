<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database_customer')->insert([
            [
                'kode_customer' => 'CST-001',
                'nama_customer' => 'Asyifa',
                'alamat' => 'Jalan Bandung no 11',
                'no_telp' => '0891-990-8991'
            ],
            [
                'kode_customer' => 'CST-002',
                'nama_customer' => 'Adelia',
                'alamat' => 'Jalan Merpati nomor 14',
                'no_telp' => '0876-9088-2265'
            ],
            [
                'kode_customer' => 'CST-003',
                'nama_customer' => 'Hanifa',
                'alamat' => 'Jalan Cinta Nomor 21',
                'no_telp' => '345-779-800'
            ],
            [
                'kode_customer' => 'CST-004',
                'nama_customer' => 'Elmarch',
                'alamat' => 'Jalan Daun Kelapa No 19',
                'no_telp' => '2347-9043-667'
            ],
            [
                'kode_customer' => 'CST-005',
                'nama_customer' => 'Shamima',
                'alamat' => 'Jalan Baca No 8',
                'no_telp' => '550-997-8665'
            ],
        ]);
    }
}
