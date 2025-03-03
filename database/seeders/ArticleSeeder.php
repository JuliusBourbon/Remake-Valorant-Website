<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'slug' => 'valorant-9.06-patch-notes',
            'img' => 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/04d7b357965fa7c74a181461e58df0e0621cac44-1920x1080.jpg?auto=format&fit=fill&q=80&w=1184',
            'title' => 'VALORANT 9.06 PATCH NOTES',
            'summary' => 'Player Behavior and Gameplay System Updates, Tips for New Players for players new to VALORANT, and more.',
            'author_id' => '1',
            'category_id' => '1',
            'body' => 'Hi Everyone. Im Jo-Ellen. There are a lot of updates in Patch 9.06. 
            
            Specifically, you can now see whether youre picking up a Reaver vandal or a Forsaken vandal, new VALORANT PC players will get tips on how to play, and the voting system no longer involves AFK players in the voting process. 
            
            As always, let us know what you think of this update. We always look forward to hearing from you.',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);

        Article::create([
            'slug' => 'Vanguard-x-VALORANT',
            'img' => 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/755cad32023fc3a6cc4e55d6a084ba803a561772-1920x1080.jpg?auto=format&fit=fill&q=80&w=1184',
            'title' => 'VANGUARD X VALORANT',
            'summary' => 'How the anti-cheat team continues to evolve along with the development of cheaters.',
            'author_id' => '3',
            'category_id' => '1',
            'body' => "Hi! I’m Jose “the3” Chavez from Riot’s Vanguard anti-cheat team! As a data engineer, my job is to quickly and efficiently provide the team with the data they need to detect and prosecute cheaters! Essentially, I process data so it can “talk.” Working with data is fun, but I think I’ll leave it for a while to talk about Vanguard’s developments.

                    Originally, I asked “mirageofpenguins” to write this article like in League , but apparently he had to return a video recording or something. So, for now, I’ll be the one writing. I’ll be discussing anti-cheat in VALORANT PC, mouse detection in VALORANT Console, leaked Ranked Rollback plans, and finally, some important tips on account security.

                    Four Years of Protecting the Game
                    It’s been four years since Vanguard launched in VALORANT. It’s been an incredible journey, and along the way, we’ve faced a lot. Thankfully, anti-cheat is still going strong, and we’re determined to keep it going!

                    Let’s start with a summary of the actions we’ve taken. In the last four years, we’ve banned over 3.6 million accounts for cheating. That’s roughly one ban every 37 seconds! Note that this number doesn’t include other actions we’ve taken for botting, jockeying, or intentional matchmaking with cheaters. The graph below shows a breakdown of those actions since the beginning, broken down by banning system.

                    Detection: bans imposed on explicitly detected cheat assets

                    Hardware: pending suspension of accounts identified as repeat infringers

                    Manual: tires dropped by agents after manual review

                    We’re taking action on more cheating accounts than ever before. This is partly because the game is becoming more popular with both cheaters and players. Additionally, we’ve recently noticed that our automated detection systems are taking on a heavier load than our hardware enforcement systems. This is intentional because we want to test and release other methods of creating a safer environment for VALORANT to run (keep reading).",
            'created_at' => now(),
            'updated_at' => now(),
        
        ]);

        Article::create([
            'slug' => 'Vyse-Adapt-or-Lose',
            'img' => 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d80da40569edce255f709e70b28954f41d39feba-1920x1080.jpg?auto=format&fit=fill&q=80&w=1184',
            'title' => 'VYSE: ADAPT OR LOSE',
            'summary' => 'Roses always have thorns. Only a few are deadly.',
            'author_id' => '2',
            'category_id' => '2',
            'body' => "Duelists, meet Vyse—a liquid metal thorn in your side, and the newest Radiant to the VALORANT roster.

                    Vyse is a Sentinel with a kit designed to cause trouble for anyone who is not careful when entering a spike location. His primary ability to stop opponents comes from the Radianite-filled metal alloy that flows through him. Vyse manipulates this metal into several utility pieces that are carefully designed to outwit opponents. He also uses this utility to turn ambush points into traps and careless predators into prey.

                    “If you think back to earlier this year, Clove was the answer to how people were playing Controller in Competitive. Expanding on that, Vyse is the answer to how players are currently playing the game from a space-taking perspective, the Duelist,” said Agent Team Lead John “Riot MEMEMEMEME” Goscicki. “So she’s the answer to five players coming to stomp around one location.”

                    How does Vyse stop this overly aggressive fragger? It's easy

                    Isolate, weaken, dominate.

                    Shear

                    “Vyse’s walls were the first thing we wanted to create for the kit,” says Vyse Agent Designer Kevin Meier. “In our mind, he’s like a spider watching over his web. He’s not trying to stop you from getting through the ambush point like Sage does with her walls. Vyse wants to let you in so he can pounce on you afterward.”
                    However, in order for that gameplay cycle to work, it must isolate its prey. While most easily placed utilities can be destroyed by shooting them, Shear cannot be destroyed. Because of this, its duration is much shorter than Sage's or Deadlock's barriers.

                    “Vyse is the type that tries to proactively close his own cycle with utility and gunplay, whereas other Sentinels prefer to be sneaky. Basically, the 1-2 combo that works for Vyse is wall followed by flash,” Kevin said. “‘Hey, players are separated now, but you still have to take advantage of the situation and take them out.’ That’s where the flash comes in.”

                    Arc Rose

                    “Sentinels really excel when they come with their own tools that give you a lot of flexibility when you think about them, both as solo abilities and how to combine them,” Kevin continued.

                    One unique thing about Vyse as a Sentinel is his flash. No other Sentinel on the roster has a flash, and no other Agent in the game has a flash like his. Arc Rose is a flash that can be placed anywhere on the map and detonated by Vyse whenever he wants. Sentinels with flash make teams very excited because he can shake up team compositions.

                    “Flash placed pre-round is very impactful in setup and aims to debuff players who enter his domain. It’s another defensive tool in his kit that synergizes well with coordinated team play,” Kevin added.

                    This tool also fits perfectly with Vyse's metal plant theme.

                    “Also, there’s a level of elegance and precision to the pre-round setup that resembles (in a weird way) gardening,” Riot MEMEMEMEME says with a smile. “Flash can be a highlight. But that’s not fun. How about getting blinded by a flower blooming?”

                    Razorvine

                    Speaking of blooming, in a much more painful way, Vyse also has an ability that can be launched, landing on the ground and being invisible… until it’s activated. When activated, his Razorvines will spread out into a large metal Razorvine nest that slows and deals damage to enemies as they move. This nest is also very noisy.

                    The barbed wire isn't too dangerous unless you try to walk through its nest on the ground. So, if you find yourself stuck in a Razorvine, stay put and be prepared to fight a Vyse who is most likely waiting to attack you.

                    “In playtesting, we saw some players place Razorvine in front of ambush points with walls and activate it as soon as the walls go up,” Kevin said. “There were also some fun combos in playtesting where they aggressively launch Razorvine into lanes to try to get audio. Then, you can either follow up as they try to get out, or try to stall them.”

                    Steel Garden

                    Vyse’s ultimate, Steel Garden, is by far his most unique ability. While his flash, wall, and Razorvine are new takes on existing ability types, Steel Garden is the newest ability in VALORANT.

                    “With Vyse’s ultimate, we wanted to create a gun advantage for Vyse and his team,” Kevin explains. “He creates a lockout condition where a player’s primary weapon will be locked out for a short period of time. You can use a gun or an ability, but it still creates a gun advantage, or it can also neutralize a gun advantage if your team is in a low-buy round and Vyse’s ultimate is ready.”

                    Steel Garden will undoubtedly have an economic impact on teams that play with or against Vyse. Pistol round heroes, it's your time to prove yourself.

                    Game Respecting Fellow Game
                    “Ability Vyse is a behavioral response to how players now play VALORANT outside of the early tactical cycle,” Riot MEMEMEMEME said. “We’re now at a point where we’re pushing Agent creation in response to the evolution of the game and things that were never envisioned during core game development.”

                    So gamers, welcome. Your ability to continually innovate on the battlefield empowers the VALORANT dev team to provide that answer. Vyse’s design aims to fill a new gameplay niche for VALORANT in 2024. However, he’s not a quick fix to the Duelist meta. There’s still plenty of room to fight back.

                    “His biggest weakness compared to most of the current meta Sentinels is that he can’t directly cover lanes. Cypher has cameras and multiple trips, whereas KJ can cover multiple lanes with his turrets and Alarm Bot,” Kevin said. “So I think on bigger maps or maps with three deployment locations, he might struggle. However, on maps with tighter corridors where you can lock down players and don’t need as much flank coverage, I think he could have a better chance.”

                    Final Touches
                    As you start to discover some of the in-game voicemails left by Vyse, it becomes clear that he’s no fool. While his backstory hasn’t been fully revealed, we know there’s a brain behind his antenna.

                    “You want to feel smart when you play Vyse. Like being able to predict what an enemy is going to do four moves from now and being able to prepare yourself with your abilities,” said Conor fizzNchips Sheehy, Lead Narrative Writer for Vyse. “We also wanted a darker character for Vyse to differentiate her from Agents like Clove and Gekko that have already been released. So, a little bit of a monster power was given to her.”

                    The idea of ​​a female monster immediately appealed to Vyse’s Concept Artist Konstantin “uRude” Maystrenko and 3D Artist Rosa “Red2Blue” Lee. They also took some liberty when designing an important aspect of a competitive shooter like VALORANT: her silhouette.

                    “One of the most important parts of designing an Agent is creating a unique silhouette that tells you who you’re looking at from a distance. With each new Agent release, it becomes harder to find new ways to create this silhouette and make it unique. For Vyse, the antenna is his signature,” uRude said. “He also has flowers and roses incorporated into his design. The roses add depth to his shoulder pads. If you look at his pants, the pattern is like liquid metal spikes.”
                    “We also wanted to add to the theme of the spikes. From the front, the antennas on his helmet are very sharp and look like spikes, but he also needed to look a little bit demonic and weird. We also felt like the antennas almost looked like horns,” added Red2Blue.

                    “However, to some people, the antennae can look like cat ears and I’m sure some really cute Vyse fan art will pop up in the future,” uRude smiled.

                    For now, be careful. This rose has thorns that can kill.",
            'created_at' => now(),
            'updated_at' => now(),
        
        ]);
        
        Article::create([
            'slug' => 'Riot Games Drops Bleed Esports from VCT Pacific, Promotes Boom Esports',
            'img' => 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/b4bdfeeaaafc6bc7843ba5baeae4457943d9f722-1920x1080.jpg?auto=format&fit=max&w=1920',
            'title' => 'RIOT GAMES DROPS BLEED ESPORTS FROM VCT PACIFIC, PROMOTES BOOM ESPORTS',
            'summary' => ' ',
            'author_id' => '1',
            'category_id' => '3',
            'body' => 'Latest News about VCT Pacific
                    After careful consideration, Riot Games has made the decision to remove Bleed Esports from the VALORANT Champions Tour and VCT Pacific. Bleed Esports was disqualified for failing to comply with critical reporting requirements and other key obligations under the Team Participation Agreement (TPA). Removing a team from the Riot Games esports ecosystem is not something we take lightly. However, due to their continued failure to comply with procedures, Bleed Esports will no longer participate in VCT Pacific in order to protect the best interests of the players and the league. The affected players have been notified of the decision so they can explore other opportunities as soon as possible.

                    In line with our commitment to merit-based qualification, Boom Esports, the runner-up of Ascension Pacific 2024, will be promoted to the vacant slot. This change does not impact the format of VCT Pacific 2025, and the league will continue with 12 teams as planned.',
            'created_at' => now(),
            'updated_at' => now(),
        
        ]);

    }
}
