<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'ADM',
                'status' => 'admin',
                'password' => bcrypt('123'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\User::insert([
            [
                'NIK' => '1202194328',
                'name' => 'Barajati Syakurnia',
                'hp' => '081216133830',
                'alamat' => 'Jl.Telekomunikasi 1',
                'tanggallahir' => '1995-05-12',
                'email' => 'barajatisyakurnia@gmail.com',
                'role' => 'USER',
                'password' => bcrypt('user123'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
