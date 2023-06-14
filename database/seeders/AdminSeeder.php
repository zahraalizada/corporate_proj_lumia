<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('admins')->insert([
           'name'=>'Zahra Alizada',
           'email'=>'zahra@gmail.com',
           'password'=> Hash::make('12345678'),
           'created_at'=>now(),
           'updated_at'=>now()
       ]);
    }

}
