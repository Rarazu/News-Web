@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto px-10 py-14">
    <h1 class="text-2xl font-semibold mb-8">
        News Category : {{ ucfirst($category) }}
    </h1>

    <div class="space-y-6">
        @for ($i = 0; $i < 4; $i++)
        <a href="/article"
           class="flex gap-6 p-4 border rounded-xl hover:shadow-sm transition bg-white">
            
            <img src="https://picsum.photos/800/500"
                 class="w-48 h-32 object-cover rounded-lg" alt="">

            <div>
                <h2 class="text-lg font-semibold mb-2">
                    Judul Berita Contoh {{ $i + 1 }}
                </h2>
                <p class="text-sm text-gray-600 mb-3">
                    Ringkasan singkat isi berita agar pembaca tahu gambaran umumnya.
                </p>
                <span class="text-xs text-gray-400">
                    22 Maret 2024 • 4 menit baca
                </span>
            </div>

        </a>
        @endfor
    </div>
</section>
@endsection
