<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder untuk users dan categories
        $this->call([
            UserSeeder::class, // Seeder untuk User
            CategorySeeder::class, // Seeder untuk Category
            ArticleSeeder::class, // Seeder untuk Article
            AgentSeeder::class, // Seeder untuk Agent
        ]);
    }
}
