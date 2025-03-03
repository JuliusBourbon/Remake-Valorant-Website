<x-main>
  <x-slot:title>{{ $title }}</x-slot:title>
  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-slate-50 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        <img class="mb-5" src="{{ $article['img'] }}">
        <header class="mb-4 lg:mb-6 text-center text-5xl font-bold text-black">
          <h3 class="">{{ $article['title'] }}</h3>
        </header>

        <div class="mr-3 text-sm text-gray-900 dark:text-white">
          <div class="text-lg font-bold text-gray-900 mb-5 text-center">
            <a href="/categories/{{ $article->category->slug }}" class="text-red-600 hover:underline"> {{ $article->category->name }} </a>|
            <a href="/authors/{{ $article->author->id }}" rel="author" class="hover:underline">{{ $article->author->name }} </a>|
            <a class=" ">{{ $article->created_at->format('j F Y') }}</a>
          </div>
        </div>
        <hr class="mb-3" style="border-color: rgb(0 0 0);">
        <div class="mb-5 text-xl font-bold">
          <p>{{ $article['summary'] }}</p>
        </div>
      <p class="mb-5">{!! nl2br(e($article->body)) !!}</p>
      <a href="/articles" class="text-blue-600 hover:underline text-lg">&laquo; Back to all articles</a>
      </article>
    </div>
  </main>
</x-main>