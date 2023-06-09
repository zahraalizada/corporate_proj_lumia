<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('communications')->insert([
            'address' => 'A108 Adam Street New York, NY 535022',
            'email1' => 'info@example.com',
            'email2' => 'contact@example.com',
            'phone1' => '+1 5589 55488 51',
            'phone2' => '+1 5589 22475 14',
            'created_at' =>now(),
            'updated_at' =>now()

        ]);
    }
}
