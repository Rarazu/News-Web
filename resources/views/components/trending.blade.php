
@props(['articles'])

<section class="px-10 py-12">
    <h2 class="text-2xl font-bold mb-2">Our Trending Article</h2>
    <div class="grid grid-cols-3 gap-6">
        @foreach($articles as $item)
            <x-article-card :article="$item" />
        @endforeach
    </div>
</section>


