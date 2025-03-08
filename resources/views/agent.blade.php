<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <x-slot:background>bg-gray-900</x-slot:background>

    <section class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $agent->name }}</h2>
                <img src="{{ $agent->roleImg }}" alt="" class="mx-auto my-10 max-h-16 ">
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $agent->role }}</p>
                <img class="mx-auto mb-4 max-h-64" src="{{ $agent->img }}" alt="{{ $agent->name }} Avatar">
                <p class="text-lg dark:text-white">{{ $agent->description }}</p>
            </div>

            <h3 class="mb-20 text-3xl font-bold text-gray-900 dark:text-white">Abilities</h3>
            
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div>
                    <img class="text-lg dark:text-white mx-auto mb-4 max-h-16" src="{{ $agent->s1Img }}">`
                    <p class="text-lg dark:text-white">{!! nl2br(e($agent->s1Desc)) !!}</p>
                </div>
                <div>
                    <img class="text-lg dark:text-white mx-auto mb-4 max-h-16" src="{{ $agent->s2Img }}">`
                    <p class="text-lg dark:text-white">{!! nl2br(e($agent->s2Desc)) !!}</p>
                </div>
                <div>
                    <img class="text-lg dark:text-white mx-auto mb-4 max-h-16" src="{{ $agent->s3Img }}">`
                    <p class="text-lg dark:text-white">{!! nl2br(e($agent->s3Desc)) !!}</p>
                </div>
                <div>
                    <img class="text-lg dark:text-white mx-auto mb-4 max-h-16" src="{{ $agent->s4Img }}">`
                    <p class="text-lg dark:text-white">{!! nl2br(e($agent->s4Desc)) !!}</p>
                </div>
            </div>
        </div>
    </section>
</x-main>
<x-footer></x-footer>