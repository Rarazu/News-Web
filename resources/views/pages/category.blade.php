@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-10 py-14">
    <h1 class="text-2xl font-semibold mb-8">News Category</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($categories as $cat)
        <a href="{{ route('category.show', $cat->id_category) }}"
           class="p-6 rounded-xl border hover:shadow-md transition bg-white">
            <h2 class="text-lg font-semibold mb-2">{{ $cat->name }}</h2>
            <p class="text-xs text-gray-400">{{ $cat->news->count() }} Articles</p>
        </a>
        @endforeach
    </div>
</section>
@endsection