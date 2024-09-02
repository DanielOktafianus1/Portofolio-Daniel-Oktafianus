<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Daniel Oktafianus',
            'email' => 'danieloktafianus@gmail.com',
            'gambar' => 'igluyflyuf',
            'deskripsi' => 'lglifiy',
            'password' => Hash::make('123123123')
        ]);
    }
}
