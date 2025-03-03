<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agent::create([
            'slug' => "brimstone",
            'img' => "../../img/Brimstone_Artwork_Full.png",
            'name' => "BRIMSTONE",
            'role' => "Controller",
            'roleImg' => "https://static.wikia.nocookie.net/valorant/images/0/04/ControllerClassSymbol.png/revision/latest?cb=20200408043911",
            'description' => "Joining from the US, Brimstone's orbital weapons ensure his squad is always in a favorable position. His ability to deliver reinforcements with precision and safety makes him an unmatched combat commander.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/d7e00a4ad8a1a01b2edcb9fc1193d05e4e50248f-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/5325b2340045a32d919d467ce3b09c3725de73ea-126x126.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/f6c1e1c587dbfe97a4185a47326ce45c42620583-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/8cfa836d1d19356685e42c13054f9f5bc8e9e029-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's1Desc' => "INCENDIARY
                        READY the incendiary grenade launcher. SHOOT to launch a grenade that explodes upon reaching the floor, creating a long-lasting fire zone that damages players within the zone.",
            's2Desc' => "SKY SMOKE
                        START the tactical map. SHOOT to determine the landing location of the Brimstone smoke cloud. SHOOT ALT to confirm, launching a long-lasting, vision-obscuring smoke cloud in the selected area.",
            's3Desc' => "STIM BEACON
                        STAND OUT a stim beacon. SHOOT to throw a stim beacon in front of Brimstone. When it lands, the stim beacon will create a field that awards Rapid Fire to the player.",
            's4Desc' => "ORBITAL STRIKE
                        START the tactical map. SHOOT to launch a long-lasting orbital strike laser at a selected location, dealing high damage over time to players in the selected area.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Agent::create([
        //     'slug' => "",
        //     'img' => "",
        //     'name' => "",
        //     'role' => "",
        //     'roleImg' => "",
        //     'description' => "",
        //     's1Img' => "",
        //     's2Img' => "",
        //     's3Img' => "",
        //     's4Img' => "",
        //     's1Desc' => "",
        //     's2Desc' => "",
        //     's3Desc' => "",
        //     's4Desc' => "",
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
