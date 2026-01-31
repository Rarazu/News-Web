@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto px-10 py-14">
    <h1 class="text-2xl font-semibold mb-8">
        News Category : {{ $category->name }}
    </h1>

    <div class="space-y-6">
        @forelse ($category->news as $item)
        <a href="{{ route('article.detail', $item->id_artikel) }}"
           class="flex gap-6 p-4 border rounded-xl hover:shadow-sm transition bg-white">
            
            <img src="{{ $item->imagePath ? asset($item->imagePath) : 'https://picsum.photos/800/500' }}"
                 class="w-48 h-32 object-cover rounded-lg" alt="{{ $item->title }}">

            <div>
                <h2 class="text-lg font-semibold mb-2">
                    {{ $item->title }}
                </h2>
                <p class="text-sm text-gray-600 mb-3">
                    {{ Str::limit($item->content, 150) }}
                </p>
                <span class="text-xs text-gray-400">
                    {{ $item->created_at->format('d M Y') }} • 4 menit baca
                </span>
            </div>
        </a>
        @empty
        <div class="text-center py-20">
            <p class="text-gray-500">Belum ada berita di kategori ini.</p>
        </div>
        @endforelse
    </div>
</section>
@endsection