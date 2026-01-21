@extends('layouts.app')

@section('content')
<section class="px-10 py-16 max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">About Inews</h1>

    <p class="text-gray-600 mb-6">
        Inews merupakan portal berita dan informasi resmi instansi
        yang menyajikan berita terkini kepada masyarakat.
    </p>

    <div class="grid grid-cols-2 gap-8">
        <div>
            <h2 class="font-semibold">Vision</h2>
            <p class="text-gray-600">
                Menjadi portal informasi yang terpercaya.
            </p>
        </div>

        <div>
            <h2 class="font-semibold">Mission</h2>
            <p class="text-gray-600">
                Menyediakan informasi publik yang akurat.
            </p>
        </div>
    </div>
</section>
@endsection
