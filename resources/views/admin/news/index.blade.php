@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-semibold mb-6">Daftar Berita</h1>

<a href="{{ url('/admin/news/create') }}"
   class="bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-800">
   + Tambah Berita
</a>

{{-- Alert Sukses --}}
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white rounded shadow text-sm overflow-hidden">
    <thead class="bg-gray-100 border-b">
        <tr>
            <th class="p-3 text-left">Judul</th>
            <th class="p-3 text-left">Kategori</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($news as $item)
        <tr class="border-t hover:bg-gray-50 transition">
            <td class="p-3 font-medium">{{ $item->title }}</td>
            <td class="p-3 text-gray-600">{{ $item->category->name ?? 'Tanpa Kategori' }}</td>
            <td class="p-3">
                <span class="px-2 py-1 rounded-full text-xs {{ $item->status == 'publish' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ ucfirst($item->status) }}
                </span>
            </td>
            <td class="p-3 text-center">
                <div class="flex justify-center gap-3">
                    
                    {{-- Tombol Edit --}}
                    <a href="{{ url('/admin/news/' . $item->id_artikel . '/edit') }}" 
                       class="text-blue-600 hover:text-blue-800" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2.828 2.828 0 114 4L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>

                    {{-- Tombol Delete --}}
                    <form action="{{ url('/admin/news/' . $item->id_artikel) }}" method="POST" onsubmit="return confirm('Yakin hapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>

                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="p-10 text-center text-gray-500 italic">
                Belum ada data berita.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection