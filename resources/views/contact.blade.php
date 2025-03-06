<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <h1>My Contact</h1>
    <div class="flex justify-center items-center h-screen bg-gray-900 rounded-lg">
        <div class="w-full max-w-4xl p-4 bg-gray-800 rounded-lg shadow-lg">
            <h2 class="text-center text-white text-xl font-bold mb-4">Embedded Content</h2>
            <div class="relative w-full h-0" style="padding-bottom: 56.25%;">
                <iframe 
                    class="absolute top-0 left-0 w-full h-full rounded-lg"
                    src="https://tracker.gg/valorant/profile/riot/bourbon%23bozo/overview"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

</x-main>