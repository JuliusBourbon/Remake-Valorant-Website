<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="flex justify-center items-center h-screen bg-gray-900 rounded-lg flex-col">
        <h2 class="text-center text-white text-3xl font-bold mb-4">My Personal Account</h2>
        <div class="flex justify-center items-center space-x-7 my-5 mb-12">
            <a href="https://github.com/JuliusBourbon" target="_blank">
                <img src="../../img/githubicon.png" alt="github icon" class="w-8 h-8">
            </a>
            <a href="https://www.instagram.com/sbjibo" target="_blank">
                <img src="../../img/instagramicon.svg" alt="instagram icon" class="w-8 h-8">
            </a>
            <a href="https://x.com/juliusbourbonn" target="_blank">
                <img src="../../img/Xicon.png" alt="X icon" class="w-9 h-9 rounded-full">
            </a>
            <a href="https://www.tiktok.com/@bourbonnnnnn" target="_blank">
                <img src="../../img/tiktokicon.svg" alt="tiktok icon" class="w-8 h-8">
            </a>
        </div>
        <div class="w-full max-w-4xl p-4 bg-gray-800 rounded-lg shadow-lg">
            <h2 class="text-center text-white text-2xl font-bold mb-4">Valorant Tracker</h2>
            <div class="relative w-full h-0" style="padding-bottom: 70.25%;">
                <iframe class="absolute top-0 left-0 w-full h-full rounded-lg" src="https://tracker.gg/valorant/profile/riot/bourbon%23bozo/overview" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</x-main>