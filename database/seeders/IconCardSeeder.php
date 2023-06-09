<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('icon_cards')->insert([
            0=> [
                'title' => 'Lorem Ipsum',
                'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
                'icon' => '<i class="bx bxl-dribbble"></i>',
                'type' => 'home',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 1=> [
                'title' => 'Sed ut perspiciatis',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore',
                'icon' => '<i class="bx bx-file"></i>',
                'type' => 'home',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 2=> [
                'title' => 'Magni Dolores',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
                'icon' => '<i class="bx bx-tachometer"></i>',
                'type' => 'home',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 3=> [
                'title' => 'Lorem Ipsum',
                'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
                'icon' => '<i class="bi bi-briefcase"></i>',
                'type' => 'services',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 4=> [
                'title' => 'Sed ut perspiciatis',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'icon' => '<i class="bi bi-bar-chart"></i>',
                'type' => 'services',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 5=> [
                'title' => 'Magni Dolore',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
                'icon' => '<i class="bi bi-brightness-high"></i>',
                'type' => 'services',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 6=> [
                'title' => 'Dolor Sitema',
                'description' => 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata',
                'icon' => '<i class="bi bi-card-checklist"></i>',
                'type' => 'services',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 7=> [
                'title' => 'Nemo Enim',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'icon' => '<i class="bi bi-binoculars"></i>',
                'type' => 'services',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 8=> [
                'title' => 'Eiusmod Tempor',
                'description' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',
                'icon' => '<i class="bi bi-calendar4-week"></i>',
                'type' => 'services',
                'created_at' =>now(),
                'updated_at' =>now()
            ]


        ]);
    }
}
