@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-semibold mb-6">Edit Berita</h1>

<form method="POST" action="/admin/news/{{ $news->id_artikel }}" enctype="multipart/form-data" class="space-y-5 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT') {{-- WAJIB UNTUK UPDATE --}}

    <div>
        <label class="block text-sm mb-1">Judul Berita</label>
        <input type="text" name="title" value="{{ $news->title }}" class="w-full border px-4 py-2 rounded focus:ring focus:ring-blue-200">
    </div>

    <div>
        <label class="block text-sm mb-1">Kategori</label>
        <select name="id_category" class="w-full border px-4 py-2 rounded bg-white">
            @foreach($categories as $cat)
                <option value="{{ $cat->id_category }}" {{ $news->id_category == $cat->id_category ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-sm mb-1">Isi Berita</label>
        <textarea name="content" rows="5" class="w-full border px-4 py-2 rounded focus:ring focus:ring-blue-200">{{ $news->content }}</textarea>
    </div>

    <div>
        <label class="block text-sm mb-1">Gambar Berita (Kosongkan jika tidak diganti)</label>
        <input type="file" name="image" class="w-full border px-3 py-2 rounded bg-white">
        <div class="mt-2">
            <p class="text-xs text-gray-500 mb-1">Gambar saat ini:</p>
            <img src="{{ asset($news->imagePath) }}" class="w-32 rounded border" alt="">
        </div>
    </div>

    <div>
        <label class="block text-sm mb-1">Status</label>
        <select name="status" class="border px-4 py-2 rounded bg-white">
            <option value="draft" {{ $news->status == 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="publish" {{ $news->status == 'publish' ? 'selected' : '' }}>Publish</option>
        </select>
    </div>

    <div class="pt-2">
        <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">Update Berita</button>
        <a href="/admin/news" class="ml-2 text-gray-500">Batal</a>
    </div>
</form>
@endsection