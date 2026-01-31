@props(['news'])

<section class="px-10 py-16 grid grid-cols-2 gap-10 items-center">
    <div>
        <h1 class="text-4xl font-bold leading-tight">
            {{ $news->title ?? 'Default Title' }}
        </h1>
        <p class="mt-4 text-gray-500">
            {{ Str::limit($news->content ?? 'No content available', 150) }}
        </p>
        <a href="{{ route('article.detail', $news->id_artikel) }}" class="inline-flex items-center gap-2 mt-6 text-blue-800 font-medium">
            Learn More →
        </a>
    </div>

    <div>
        <img src="{{ $news->imagePath ?? 'https://picsum.photos/800/500' }}"
             class="rounded-xl w-full object-cover"
             alt="Hero">
    </div>
</section>