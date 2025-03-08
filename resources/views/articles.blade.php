<x-main>
    <x-slot:title class="">{{ $title }}</x-slot:title>
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
        <div class="flex flex-wrap -mx-4">
            @foreach ($articles as $article)
                <div class="w-full md:w-1/3 lg:w-1/3 px-4 mb-5">
                    <section>
                        <div class="flex flex-wrap justify-start items-center">
                            <div class="mb-5">
                                <a href="articles/{{ $article['slug'] }}">
                                    <img src="{{ $article['img'] }}" alt="{{ $article['img'] }}">
                                </a>
                            </div>
                            <div class="mr-3 text-sm text-gray-900 dark:text-white">
                                <div class="text-lg font-bold text-gray-900 mb-5">
                                  <a href="/categories/{{ $article->category->slug }}" class="text-red-600 hover:underline"> {{ $article->category->name }} </a>|
                                  <a href="/authors/{{ $article->author->id }}" rel="author" class="hover:underline">{{ Str::limit($article->author->name, 10) }} </a>|
                                  <a class=" ">{{ $article->created_at->format('j M Y') }}</a>
                                </div>
                            </div>
                            <a href="articles/{{ $article['slug'] }}" class="mb-2 text-xl font-bold text-gray hover:underline">{{ $article['title'] }}</a href="articles/{{ $article['slug'] }}">
                            <a href="articles/{{ $article['slug'] }}" class="text-gray-500 dark:text-gray-400">{{ Str::limit($article['summary'], 60) }}</a>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </div>
</x-main>
<x-footer></x-footer>