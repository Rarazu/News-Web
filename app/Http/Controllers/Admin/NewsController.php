<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index');
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        // sementara belum pakai database
        return redirect('/admin/news')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin.news.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect('/admin/news')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        return redirect('/admin/news')->with('success', 'Berita berhasil dihapus');
    }
}
