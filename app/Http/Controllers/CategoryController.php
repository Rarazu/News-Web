<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Menampilkan semua kategori
    public function index()
    {
        $categories = Category::all();
        return view('pages.category', compact('categories'));
    }

    // Menampilkan berita berdasarkan kategori tertentu
    public function show($id)
    {
        // Mengambil kategori beserta berita yang ada di dalamnya
        $category = Category::with('news')->findOrFail($id);
        
        return view('pages.category-articles', compact('category'));
    }
}
