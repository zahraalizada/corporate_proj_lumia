<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_links')->insert([
            0=> [
                'name' => 'Facebook-Walter',
                'link' => 'walter@facebook.com',
                'icon' => '<i class="bi bi-facebook"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 1=> [
                'name' => 'Twitter-Walter',
                'link' => 'walter@twitter.com',
                'icon' => '<i class="bi bi-twitter"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 2=> [
                'name' => 'Instagram-Walter',
                'link' => 'walter@instagram.com',
                'icon' => '<i class="bi bi-instagram"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 3=> [
                'name' => 'Linkedin-Walter',
                'link' => 'walter@linkedin.com',
                'icon' => '<i class="bi bi-linkedin"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 4=> [
                'name' => 'Facebook-sarah',
                'link' => 'sarah@facebook.com',
                'icon' => '<i class="bi bi-facebook"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 5=> [
                'name' => 'Twitter-sarah',
                'link' => 'sarah@twitter.com',
                'icon' => '<i class="bi bi-twitter"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 6=> [
                'name' => 'Instagram-sarah',
                'link' => 'sarah@instagram.com',
                'icon' => '<i class="bi bi-instagram"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 7=> [
                'name' => 'Linkedin-sarah',
                'link' => 'sarah@linkedin.com',
                'icon' => '<i class="bi bi-linkedin"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 8=> [
                'name' => 'Facebook-william',
                'link' => 'william@facebook.com',
                'icon' => '<i class="bi bi-facebook"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 9=> [
                'name' => 'Twitter-william',
                'link' => 'william@twitter.com',
                'icon' => '<i class="bi bi-twitter"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 10=> [
                'name' => 'Instagram-william',
                'link' => 'william@instagram.com',
                'icon' => '<i class="bi bi-instagram"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 11=> [
                'name' => 'Linkedin-william',
                'link' => 'william@linkedin.com',
                'icon' => '<i class="bi bi-linkedin"></i>',
                'type' => 'team',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 12=> [
                'name' => 'Facebook-website',
                'link' => 'website@facebook.com',
                'icon' => '<i class="bi bi-facebook"></i>',
                'type' => 'website',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ],  13=> [
                'name' => 'Twitter-website',
                'link' => 'website@twitter.com',
                'icon' => '<i class="bi bi-twitter"></i>',
                'type' => 'website',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 14=> [
                'name' => 'Instagram-website',
                'link' => 'website@instagram.com',
                'icon' => '<i class="bi bi-instagram"></i>',
                'type' => 'website',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 15=> [
                'name' => 'Linkedin-website',
                'link' => 'website@linkedin.com',
                'icon' => '<i class="bi bi-linkedin"></i>',
                'type' => 'website',
                'image_card_id' => '1',
                'created_at' =>now(),
                'updated_at' =>now()
            ]


        ]);
    }
}
