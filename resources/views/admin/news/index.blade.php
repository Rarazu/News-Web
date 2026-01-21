@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-semibold mb-6">Daftar Berita</h1>

<a href="/admin/news/create"
   class="bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">
   + Tambah Berita
</a>

<table class="w-full bg-white rounded shadow text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">Judul</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-t">
            <td class="p-3">Judul Berita Contoh</td>
            <td class="p-3">Publish</td>
            <td class="p-3 text-center">
                <div class="flex justify-center gap-3">
                    
                    {{-- EDIT --}}
                    <a href="#" class="text-blue-600 hover:text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M11 5h2m-1 0v14m8-8H4" />
                        </svg>
                    </a>

                    {{-- DELETE --}}
                    <a href="#" class="text-red-600 hover:text-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>

                </div>
            </td>
        </tr>
    </tbody>
</table>

@endsection
