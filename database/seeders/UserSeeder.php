<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
        /**
        * Run the database seeds.
        *
        * @return void
        */
    public function run()
{
        DB::table('users')->insert([
        'name' => 'admin01',
        'email' => 'admin01@gmail.com',
        'password' => Hash::make('12345678'),
        'level' => 'admin',
        'jenis_kelamin' => 'Laki-laki'
        ]);
    }
}