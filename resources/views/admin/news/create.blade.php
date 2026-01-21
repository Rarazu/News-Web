@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-semibold mb-6">Tambah Berita</h1>

<form method="POST"
      action="/admin/news"
      enctype="multipart/form-data"
      class="space-y-5 bg-white p-6 rounded shadow">

    @csrf

    {{-- JUDUL --}}
    <div>
        <label class="block text-sm mb-1">Judul Berita</label>
        <input type="text" name="title"
               placeholder="Judul Berita"
               class="w-full border px-4 py-2 rounded focus:ring focus:ring-blue-200">
    </div>

    {{-- ISI --}}
    <div>
        <label class="block text-sm mb-1">Isi Berita</label>
        <textarea name="content" rows="5"
                  placeholder="Isi Berita"
                  class="w-full border px-4 py-2 rounded focus:ring focus:ring-blue-200"></textarea>
    </div>

    {{-- GAMBAR --}}
    <div>
        <label class="block text-sm mb-1">Gambar Berita</label>
        <input type="file" name="image"
               class="w-full border px-3 py-2 rounded bg-white">
        <p class="text-xs text-gray-500 mt-1">
            Format JPG / PNG, maksimal 2MB
        </p>
    </div>

    {{-- STATUS --}}
    <div>
        <label class="block text-sm mb-1">Status</label>
        <select name="status"
                class="border px-4 py-2 rounded">
            <option value="draft">Draft</option>
            <option value="publish">Publish</option>
        </select>
    </div>

    {{-- BUTTON --}}
    <div class="pt-2">
        <button type="submit"
                class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">
            Simpan
        </button>
    </div>

</form>
@endsection
