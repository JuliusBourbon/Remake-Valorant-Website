<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jo-Ellen “Riot JoEllen” Aragon',
            'email' => 'Jo@gmail.com',
            'password' => '1244',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Kenny “Karnifexlol” Cameron',
            'email' => 'Kenny@gmail.com',
            'password' => '1244',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Jose “the3” Chavez',
            'email' => 'Jose@gmail.com',
            'password' => '1244',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
