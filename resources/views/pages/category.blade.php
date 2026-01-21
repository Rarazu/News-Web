@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-10 py-14">
    <h1 class="text-2xl font-semibold mb-8">News Category</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach (['Kesehatan','Teknologi','Pendidikan','Kebijakan Publik'] as $category)
        <a href="{{ url('/category/' . Str::slug($category)) }}"
           class="p-6 rounded-xl border hover:shadow-md transition bg-white">
            <h2 class="text-lg font-semibold mb-2">{{ $category }}</h2>
        </a>
        @endforeach
    </div>
</section>
@endsection
