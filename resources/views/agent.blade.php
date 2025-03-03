<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <x-slot:background>bg-gray-900</x-slot:background>

    <section class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $agent->name }}</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $agent->role }}</p>
                <img class="mx-auto mb-4 max-h-64" src="{{ $agent->img }}" alt="{{ $agent->name }} Avatar">
                <p class="text-lg">{{ $agent->description }}</p>
            </div>
        </div>
    </section>
</x-main>
