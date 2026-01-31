@props(['articles'])

<section class="px-10 py-12 bg-gray-50">
    <h2 class="text-2xl font-bold mb-6">Latest Articles</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $item)
            <x-article-card :article="$item" />
        @endforeach
    </div>

    {{-- <div class="mt-10">
        {{ $articles->links() }}
    </div> --}}
</section>