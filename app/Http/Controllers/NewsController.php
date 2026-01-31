<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Mengambil semua berita terbaru
        // $allNews = News::with('category', 'author')->latest()->get();
        $allNews = News::where('status', 'publish')->latest()->get();
        
        // Mengambil 1 berita untuk Hero
        $heroNews = $allNews->first();
        
        // Mengambil berita sisanya untuk Trending (misal 3 berita)
        $trendingNews = $allNews->skip(1)->take(3);
      
        return view('home', compact('heroNews', 'trendingNews', 'allNews'));
    }

    public function show($id)
    {
        $news = News::with('category', 'author')->findOrFail($id);
        return view('pages.article', compact('news'));
    }
}
