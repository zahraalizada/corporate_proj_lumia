<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        $this->call(AboutSeeder::class);
//        $this->call(PortfolioSeeder::class);
//        $this->call(CategorySeeder::class);
//        $this->call(CommunicationSeeder::class);
//        $this->call(ImageCardSeeder::class);
//        $this->call(IconCardSeeder::class);
//        $this->call(SocialLinkSeeder::class);
//        ---------------
        $this->call(AdminSeeder::class);

    }
}
