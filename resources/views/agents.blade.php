<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <x-slot:background>bg-gray-900</x-slot:background>

    <section class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Agents</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of agents from Valorant.</p>
            </div> 
            <div class="grid gap-8 lg:gap-13 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($agents as $agent)
                    <div class="text-center text-gray-500 dark:text-gray-400 bg-gray-800 rounded-lg p-2">
                        <a href="agents/{{ $agent['slug'] }}" class="transition duration-300 filter brightness-50 hover:brightness-100">
                            <img class="mx-auto mb-4 max-h-64" src="{{ $agent['img'] }}" alt="{{ $agent['name'] }} Avatar">
                        </a>
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="agents/{{ $agent['slug'] }}">{{ $agent['name'] }}</a>
                        </h3>
                        <p class="text-lg my-3 dark:text-gray-300">{{ $agent['role'] }}</p>
                        <p class="text-sm md:text-lg">{{ Str::limit($agent['description'], 100)}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-main>
<x-footer></x-footer>