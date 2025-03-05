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
        $roleImages = [
            'Controller' => "https://static.wikia.nocookie.net/valorant/images/0/04/ControllerClassSymbol.png",
            'Duelist' => "https://static.wikia.nocookie.net/valorant/images/f/fd/DuelistClassSymbol.png",
            'Sentinel' => "https://static.wikia.nocookie.net/valorant/images/4/43/SentinelClassSymbol.png",
            'Initiator' => "https://static.wikia.nocookie.net/valorant/images/7/77/InitiatorClassSymbol.png",
        ];

        Agent::create([
            'slug' => "brimstone",
            'img' => "../../img/Brimstone_Artwork_Full.png",
            'name' => "Brimstone",
            'role' => "Controller",
            'roleImg' => $roleImages['Controller'],
            'description' => "Joining from the US, Brimstone's orbital weapons ensure his squad is always in a favorable position. His ability to deliver reinforcements with precision and safety makes him an unmatched combat commander.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/d7e00a4ad8a1a01b2edcb9fc1193d05e4e50248f-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/5325b2340045a32d919d467ce3b09c3725de73ea-126x126.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/f6c1e1c587dbfe97a4185a47326ce45c42620583-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/8cfa836d1d19356685e42c13054f9f5bc8e9e029-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's1Desc' => "INCENDIARY \n\nREADY the incendiary grenade launcher. SHOOT to launch a grenade that explodes upon reaching the floor, creating a long-lasting fire zone that damages players within the zone.",
            's2Desc' => "SKY SMOKE \n\nSTART the tactical map. SHOOT to determine the landing location of the Brimstone smoke cloud. SHOOT ALT to confirm, launching a long-lasting, vision-obscuring smoke cloud in the selected area.",
            's3Desc' => "STIM BEACON \n\nSTAND OUT a stim beacon. SHOOT to throw a stim beacon in front of Brimstone. When it lands, the stim beacon will create a field that awards Rapid Fire to the player.",
            's4Desc' => "ORBITAL STRIKE \n\nSTART the tactical map. SHOOT to launch a long-lasting orbital strike laser at a selected location, dealing high damage over time to players in the selected area.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "phoenix",
            'img' => "../../img/Phoenix_Artwork_Full.png",
            'name' => "Phoenix",
            'role' => "Duelist",
            'roleImg' => $roleImages['Duelist'],
            'description' => "Hailing from the U.K., Phoenix's star power shines through in his fighting style, igniting the battlefield with flash and flare. Whether he's got backup or not, he'll rush into a fight on his own terms.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/beb874d19c79982f0e99e858098c067d9132a95a-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/67df9ca3cb158a945fc9b13eb0e3949683c4c65d-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/d807a982ce70475acb2e8461b4f8737204e35d96-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/d428c0c6c73ba34676e063092a7ae7157268db0c-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's1Desc' => "CURVEBALL \n\nEQUIP a flare orb that takes a curving path and detonates shortly after throwing. FIRE to curve the flare orb to the left, detonating and blinding any player who sees the orb. ALTERNATE FIRE to curve the flare orb to the right.",
            's2Desc' => "BLAZE \n\nEQUIP a flame wall. FIRE to create a line of flame that moves forward, creating a wall of fire that blocks vision and damages players passing through it. HOLD FIRE to bend the wall in the direction of your crosshair.",
            's3Desc' => "HEALING ORB \n\nEQUIP a healing orb. FIRE with your crosshairs over a damaged ally to activate a heal-over-time on them. ALT FIRE while Sage's healing orb is equipped to conjure a healing area.",
            's4Desc' => "RUN IT BACK \n\nINSTANTLY place a marker at Phoenix's location. While this ability is active, dying or allowing the timer to expire will end this ability and bring Phoenix back to this location with full health.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "sage",
            'img' => "../../img/Sage_Artwork_Full.png",
            'name' => "Sage",
            'role' => "Sentinel",
            'roleImg' => $roleImages['Sentinel'],
            'description' => "The stronghold. The savior. Life for Sage and her squad is a series of fights to keep each other alive. She creates safety for herself and her team wherever she goes.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/f2931e5af58255216179b21cce81f53eab15d6ee-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/cdc246179e160ded2788fd37ac21f10bc040ad54-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/829075fef7193503dd480947b79d78193d729d42-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/90b6e1ca1a3ecd68e2a3072515d071f80bf46c1d-128x128.png?auto=format&fit=crop&q=80&h=64&w=64&crop=center",
            's1Desc' => "BARRIER ORB \n\nEQUIP a barrier orb. FIRE places a solid wall. ALT FIRE rotates the targeter.",
            's2Desc' => "SLOW ORB \n\nEQUIP a slowing orb. FIRE to throw a slowing orb forward that detonates upon landing, creating a lingering field that slows players caught inside of it.",
            's3Desc' => "HEALING ORB \n\nEQUIP a healing orb. FIRE with your crosshairs over a damaged ally to activate a heal-over-time on them. ALT FIRE while Sage's healing orb is equipped to conjure a healing area.",
            's4Desc' => "RESURRECTION \n\nEQUIP a resurrection ability. FIRE with your crosshairs placed over a dead ally to begin resurrecting them. After a brief channel, the ally will be brought back to life with full health.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "sova",
            'img' => "../../img/Sova_Artwork_Full.png",
            'name' => "Sova",
            'role' => "Initiator",
            'roleImg' => $roleImages['Initiator'], 
            'description' => "Born from the eternal winter of Russia's tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision. His custom bow and incredible scouting abilities ensure that even if you run, you cannot hide.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/8ab5a2d03438ff0f8b2ba2d7b26c812ab6b7adbb-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/b428e1783f98a0990b86d13872f564095442f44b-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/07877d7c79546ef64338eae550ffa5649f3582b0-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/7b9f078b0576e87e74b8175b0d33ac682b7a8ab3-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's1Desc' => "SHOCK BOLT \n\nEQUIP a bow with a shock bolt. FIRE to send the",
            's2Desc' => "OWL DRONE \n\nEQUIP an owl drone. FIRE to deploy and take control of movement of the drone. While in control of the drone, FIRE to shoot a marking dart. This dart will reveal the location of any player struck by the dart.",
            's3Desc' => "RECON BOLT \n\nEQUIP a bow with a recon bolt. FIRE to send the recon bolt forward, activating upon collision and revealing the location of nearby enemies caught in the line of sight of the bolt. Enemies can destroy this bolt.",
            's4Desc' => "HUNTER'S FURY \n\nEQUIP a bow with three long-range, wall-piercing energy blasts. FIRE to release an energy blast in a line in front of Sova, dealing damage and revealing the location of enemies caught in the line.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "viper",
            'img' => "../../img/Viper_Artwork_Full.png",
            'name' => "Viper",
            'role' => "Controller",
            'roleImg' => $roleImages['Controller'],
            'description' => "The American Chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and choke the enemy's vision. If the toxins don't kill her prey, her mindgames surely will.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/3eba05b8ed1ac69c440d54cec365e537d294be25-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/b1204a1fbcc0e2fced090f18ad18e7587357c783-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/f477dce332e51e53f4e2f565f2d3d868dd2d0df8-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/dab73c2ea877aca79a5bb0b8533d1de4ac07186a-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's1Desc' => "POISON CLOUD \n\nEQUIP a gas emitter. FIRE to throw the emitter that perpetually remains throughout the round. RE-USE the ability",
            's2Desc' => "TOXIC SCREEN \n\nEQUIP a gas emitter launcher. FIRE to deploy a long line of gas emitters. RE-USE the ability to create a tall wall of toxic gas at the cost of fuel. This ability can be RE-USED more than once.",
            's3Desc' => "SNAKE BITE \n\nEQUIP a chemical launcher. FIRE to launch a canister that shatters upon hitting the floor, creating a lingering chemical zone that damages and slows enemies.",
            's4Desc' => "VIPER'S PIT \n\nEQUIP a chemical sprayer. FIRE to spray a chemical cloud in all directions around Viper, creating a large cloud that reduces the vision range and maximum health of players inside of it.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "cypher",
            'img' => "../../img/Cypher_Artwork_Full.png",
            'name' => "Cypher",
            'role' => "Sentinel",
            'roleImg' => $roleImages['Sentinel'],
            'description' => "The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move. No secret is safe. No maneuver goes unseen. Cypher is always watching.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/292fbe783ac9e2f638822c5f87f09b005b48a712-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/eae012cb583a41bbc0de83f0963a40de58f5534f-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/df43766f56e1e844ed1b179722c9444a1bd1d45c-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/3e8e1779afeebd0612c019f8b2d41d7a984781b3-128x128.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's1Desc' => "TRAPWIRE \n\nEQUIP a trapwire. FIRE to place a destructible and covert tripwire at the targeted location. RE-USE the ability to create a tripwire that spans between two placed tripwires.",
            's2Desc' => "CYBER CAGE \n\nEQUIP a cyber cage. FIRE to toss the cyber cage in front of Cypher. ACTIVATE to create a zone that blocks vision and slows enemies who pass through it. Look at a trapwire in range to highlight it, and",
            's3Desc' => "TRAPWIRE\n\nEQUIP a trapwire. FIRE to place a destructible and covert tripwire at the targeted location creating a line that spans between the placed location and the wall opposite.",
            's4Desc' => "NEURAL THEFT \n\nINSTANTLY use on a dead enemy player in your crosshairs to reveal the location of all living enemy players.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "reyna",
            'img' => "../../img/Reyna_Artwork_Full.png",
            'name' => "Reyna",
            'role' => "Duelist",
            'roleImg' => $roleImages['Duelist'],
            'description' => "Forged in the heart of Mexico, Reyna dominates single combat, popping off with each kill she scores. Her capability is only limited by her raw skill, making her highly dependent on performance.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/62dc726ff81568e4500167d0d402e0b083c507d9-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/a9ca2fbba6c3f00e1a07e3514ac6a8f107e43e17-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/9d295b17382acbc17bdb4e45e0be74d58e94e6c5-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/daf434a1a75cee1f52309b2cf4eb8f878d07b419-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's1Desc' => "DEVOUR \n\nEnemies killed by Reyna leave behind Soul Orbs that last 3 seconds. INSTANTLY consume a nearby soul orb, rapidly healing for a short duration. Health gained through this skill exceeding 100 will decay over time.",
            's2Desc' => "DISMISS \n\nINSTANTLY consume a nearby soul orb, becoming intangible for a short duration. If EMPRESS is active, also become invisible.",
            's3Desc' => "LEER \n\nEQUIP an ethereal destructible eye. ACTIVATE to cast the eye a short distance forward. The eye will Nearsight all enemies who look at it.",
            's4Desc' => "EMPRESS \n\nINSTANTLY enter a frenzy, increasing firing speed, equip and reload speed dramatically. Scoring a kill renews the duration.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Agent::create([
            'slug' => "killjoy",
            'img' => "../../img/Killjoy_Artwork_Full.png",
            'name' => "Killjoy",
            'role' => "Sentinel",
            'roleImg' => $roleImages['Sentinel'],
            'description' => "The genius of Germany. Killjoy secures the battlefield with ease using her arsenal of inventions. If the damage from her gear doesn't stop her enemies, her robots' debuff will help make short work of them.",
            's1Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/d86a84fcd7cc656fec66be28d496a56b5171dd52-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's2Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/6fcb1a4dfb49ad8fabae929bc5aea5240ddb42ac-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's3Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/4ca9c7f4a85e5e454d8d9638247bd36cab1d4124-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's4Img' => "https://cmsassets.rgpub.io/sanity/images/dsfx7636/game_data/d7d7787df75af327d171b723a262172693125dc4-256x256.png?auto=format&fit=crop&q=80&h=48&w=48&crop=center",
            's1Desc' => "ALARMBOT \n\nEQUIP a covert Alarmbot. FIRE to deploy a bot that hunts down enemies that get in range. After reaching its target, the bot explodes, applying Vulernable. HOLD EQUIP to recall a deployed bot.",
            's2Desc' => "TURRET \n\nEQUIP a Turret. FIRE to deploy a turret that fires at enemies in a 180 degree cone. HOLD EQUIP to recall the deployed turret.",
            's3Desc' => "NANOSWARM \n\nEQUIP a Nanoswarm grenade. FIRE to throw the grenade. Upon landing, the Nanoswarm goes covert. ACTIVATE the Nanoswarm to deploy a damaging swarm of nanobots.",
            's4Desc' => "LOCKDOWN \n\nEQUIP the Lockdown device. FIRE to deploy the device. After a long windup, the device Detains all enemies caught in the radius. The device can be destroyed by enemies.",
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
