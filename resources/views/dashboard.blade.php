<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <section class="bg-white dark:bg-gray-900 py-16 md:py-0">
        <div class="gap-16 items-center h-[18rem] md:h-auto md:mx-auto max-w-screen-2xl lg:grid lg:grid-cols-2 lg:pt-10 lg:px-6 sm:flex sm:flex-col">
            <div class="font-light text-gray-500 sm:text-base md:text-lg dark:text-gray-400 text-center md:text-left">
                <h2 class="p-2 mb-4 text-4xl sm:text-5xl md:text-7xl tracking-tight font-extrabold text-gray-900 dark:text-white">We Are Valorant</h2>
                <p class="text-base sm:text-lg font-bold p-2">CHALLENGE OF LIMITS</p>
                <p class="p-2">Combine your style and experience on the global competitive stage. You have 13 rounds to attack and defend your side with fierce gunplay and tactical skills...</p>
            </div>
            <div class="mt-8">
                <div class="relative h-60 sm:h-80 md:h-96 overflow-hidden">
                    <img class="w-full object-cover hidden md:block" src="../../img/Jett_Artwork_Full.png" alt="Jett">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-slate-200">
        <div class="mx-auto max-w-screen-xl lg:pt-10 lg:px-6">
            <div class="font-light text-gray-500 sm:text-base md:text-lg">
                <h2 class="p-2 mb-4 text-3xl sm:text-4xl md:text-5xl tracking-tight font-extrabold text-gray-900 dark:text-black">Latest Article</h2>
                <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
                    <div class="flex flex-wrap -mx-4">
                        @foreach ($articles->take(3) as $article)
                            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-3">
                                <section>
                                    <div class="flex flex-col justify-start items-start">
                                        <div class="mb-5">
                                            <a href="articles/{{ $article['slug'] }}">
                                                <img src="{{ $article['img'] }}" alt="{{ $article['img'] }}" class="w-full object-cover">
                                            </a>
                                        </div>
                                        <div class="mr-3 text-sm text-gray-900 dark:text-white">
                                            <div class="text-lg font-bold text-gray-900 mb-5">
                                              <a href="/categories/{{ $article->category->slug }}" class="text-red-600 hover:underline"> {{ $article->category->name }} </a>|
                                              <a href="/authors/{{ $article->author->id }}" rel="author" class="hover:underline">{{ Str::limit($article->author->name, 10) }} </a>|
                                              <a class=" ">{{ $article->created_at->format('j M Y') }}</a>
                                            </div>
                                        </div>
                                        <a href="articles/{{ $article['slug'] }}" class="mb-2 text-lg sm:text-xl font-bold text-black hover:underline">{{ $article['title'] }}</a>
                                        <p class="text-gray-500 dark:text-gray-400">{{ Str::limit($article['summary'], 60) }}</p>
                                    </div>
                                </section>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a href="/articles" class="text-lg sm:text-xl text-blue-600 hover:underline">OPEN ARTICLE PAGE &raquo;</a><br><br>
            </div>
        </div>
    </section>

    <section class="bg-red-400 py-16">
        <div class="gap-16 items-center h-[23rem] md:h-[43rem] mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-10 lg:px-6 sm:flex sm:flex-col">
            <div class="mt-8">
                <div class="grid grid-cols-2 gap-4 lg:static sm:relative">
                    <img class="w-full object-cover hidden md:block" src="../../img/Viper_Artwork_Full.png" alt="Viper">
                    <img class="w-full object-cover hidden md:block" src="../../img/Raze_Artwork_Full.png" alt="Raze">
                </div>
            </div>
            <div class="font-light text-white text-center md:text-left sm:text-base md:text-lg">
                <h2 class="p-2 mb-4 text-4xl sm:text-5xl md:text-7xl tracking-tight font-extrabold text-gray-900 dark:text-white">AGENT</h2>
                <p class="text-lg font-bold p-2">CREATIVITY IS YOUR BEST WEAPON</p>
                <p class="p-2">More than just guns and bullets, you will choose Agents armed with adaptive, agile, and deadly abilities to prove your marksmanship...</p>
                <a href="/agents">
                    <button class="h-12 w-40 sm:h-16 sm:w-52 bg-gray-800 text-white mt-5 font-extrabold transition duration-300 hover:bg-gray-900 rounded-lg shadow-lg">View All Agents</button>
                </a>
            </div>
        </div>
    </section>
    
    <section class="bg-gray-400 py-16">
        <div class="mx-auto gap-16 items-center h-[25rem] md:h-[42rem] max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-10 lg:px-6 sm:flex sm:flex-col">
            <div class="font-light text-white sm:text-base text-center md:text-left md:text-lg">
                <h2 class="p-2 mb-4 text-4xl sm:text-5xl md:text-7xl tracking-tight font-extrabold text-gray-900 dark:text-white">WEAPON</h2>
                <p class="text-lg font-bold p-2">PRECISION AND POWER IN YOUR HANDS</p>
                <p class="p-2 ">It's not just about pulling the trigger. You'll wield a wide array of weapons, each designed for different strategies and playstyles...</p>
                <a href="/agents">
                    <button class="h-12 w-40 sm:h-16 sm:w-52 bg-red-600 text-white mt-5 font-extrabold transition duration-300 hover:bg-red-700 rounded-lg shadow-lg">View All Agents</button>
                </a>
            </div>

            <div class="mt-8 flex justify-center">
                <div class="grid grid-cols-2 gap-4 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                    <img class="w-full scale-[2] object-cover hidden md:block" src="../../img/Astra_Artwork_Full.png" alt="Astra">
                    <img class="w-full scale-[2.7] object-cover hidden md:block" src="../../img/Vyse_Artwork_Full.png" alt="Vyse">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-800 py-16">
        <div class="mx-auto h-[23rem] md:h-[32rem] max-w-screen-xl flex flex-col-reverse lg:flex-row items-center gap-16 px-6">
            <div class="w-full lg:w-1/2 hidden md:block">
                <img class="w-full h-auto object-cover rounded-lg shadow-lg" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/bccc7b5f8647a4f654d4bb359247bce6e82c77ab-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Map Example">
            </div>
            
            <div class="w-full lg:w-1/2 text-white text-center lg:text-left">
                <h2 class="text-4xl sm:text-5xl font-extrabold mb-4">YOUR MAPS</h2>
                <p class="text-lg font-bold mb-2">FIGHT AROUND THE WORLD</p>
                <p class="text-lg">Each map is a playground to showcase your creative thinking. Purpose-built for team strategies, spectacular plays, and clutch moments. Make the play others will imitate for years to come.</p>
                <a href="/map">
                    <button class="mt-5 px-6 py-3 bg-red-600 text-white font-extrabold text-lg rounded-lg shadow-lg hover:bg-red-700 transition duration-300">View All Maps</button>
                </a>
            </div>
        </div>
    </section>
</x-main>
<x-footer></x-footer>
