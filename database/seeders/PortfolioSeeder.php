<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([

            0 => [
                'title' => 'App 1',
                'subtitle' => 'App',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'slug' => Str::slug('App 1'),
                'client' => 'App 1',
                'proj_date' => now(),
                'proj_url' => '',
                'category' => 'cat_name1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            1 => [
                'title' => 'App 2',
                'subtitle' => 'App',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'slug' => Str::slug('App 1'),
                'client' => 'App 1',
                'proj_date' => now(),
                'proj_url' => '',
                'category' => 'cat_name1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            2 => [
                'title' => 'Web 1',
                'subtitle' => 'Web',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'slug' => Str::slug('Web 1'),
                'client' => 'Web 1',
                'proj_date' => now(),
                'proj_url' => '',
                'category' => 'cat_name2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            3 => [
                'title' => 'Card 1',
                'subtitle' => 'Card',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'slug' => Str::slug('Card 1'),
                'client' => 'Card 1',
                'proj_date' => now(),
                'proj_url' => '',
                'category' => 'cat_name3',
                'created_at' =>now(),
                'updated_at' =>now()
            ],
            4 => [
                'title' => 'Web 2',
                'subtitle' => 'Web',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'slug' => Str::slug('Web 2'),
                'client' => 'Web 2',
                'proj_date' => now(),
                'proj_url' => '',
                'category' => 'cat_name1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            2 => [
                'title' => 'Card 2',
                'subtitle' => 'Card',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'slug' => Str::slug('Card 2'),
                'client' => 'Card 2',
                'proj_date' => now(),
                'proj_url' => '',
                'category' => 'cat_name2',
                'created_at' => now(),
                'updated_at' => now()
            ]


        ]);
    }
}
