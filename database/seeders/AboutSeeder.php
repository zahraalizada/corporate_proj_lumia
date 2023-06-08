<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'About Us',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'list1' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'list2' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
            'image' => 'about.jpg',
            'created_at' =>now(),
            'updated_at' =>now()

        ]);
    }
}
