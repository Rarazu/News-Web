@extends('layouts.app')

@section('content')
<section class="bg-[#f7f5f1] py-16">
    <div class="max-w-3xl mx-auto px-6">
        <p class="text-sm text-gray-500 mb-6">
            Home / <span class="text-gray-700">{{ $news->category->name }}</span>
        </p>

        <h1 class="text-4xl font-serif font-semibold leading-snug mb-6">
            {{ $news->title }}
        </h1>

        <div class="flex items-center gap-4 text-sm text-gray-500 mb-10">
            <div class="flex items-center gap-2">
                <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full">
                <div>
                    <p class="font-medium text-gray-700">{{ $news->author->name ?? 'Admin' }}</p>
                    <p class="text-xs">Journalist</p>
                </div>
            </div>
            <span>•</span>
            <span>{{ $news->created_at->format('M d, Y') }}</span>
        </div>

        <img src="{{ asset($news->imagePath) }}" class="rounded-xl mb-12 w-full" alt="">

        <article class="prose prose-lg max-w-none text-gray-700">
            {!! nl2br(e($news->content)) !!}
        </article>
    </div>
</section>
@endsection