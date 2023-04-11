<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('employees')->insert([
            'Username' => 'Diarantiz',
            'Password' => '123',
            'Nama' => 'Diar',
            'Alamat' => 'Surabaya',
            'No_telp' => '087810023226',
            'Bagian' => 'Petugas Ruang Masuk',
        ]);
    }
}
