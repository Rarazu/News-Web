@props(['article'])

<div class="rounded-xl overflow-hidden shadow-sm border">
    <img src="{{ $article->imagePath ?? 'https://picsum.photos/800/500' }}" 
         class="h-48 w-full object-cover">

    <div class="p-4">
        <h3 class="font-semibold text-sm mb-2">
            {{ $article->title }}
        </h3>

        <p class="text-xs text-gray-500 mb-4">
            {{ Str::limit($article->content, 80) }}
        </p>

        <a href="{{ route('article.detail', $article->id_artikel) }}" class="text-blue-800 text-sm font-medium flex items-center gap-1">
            Learn more
            <span class="w-5 h-5 flex items-center justify-center rounded-full bg-green-100">
                →
            </span>
        </a>
    </div>
</div>