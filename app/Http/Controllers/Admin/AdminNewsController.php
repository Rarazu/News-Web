<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori untuk dropdown
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Buat nama file unik
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            // Pindahkan file 
            $file->move(public_path('images'), $fileName);
            
            // Simpan string path-nya ke database agar sama formatnya dengan seeder
            $imagePath = 'images/' . $fileName;
        }

        News::create([
            'title'       => $request->title,
            'content'     => $request->content,
            'id_category' => $request->id_category,
            'status'      => $request->status,
            'imagePath'   => $imagePath, 
            'id_user'     => Auth::id() ?? 1,
        ]);

        return redirect('/admin/news')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }
    
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
    
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'id_category' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $news->title = $request->title;
        $news->content = $request->content;
        $news->id_category = $request->id_category;
        $news->status = $request->status;
    
        // Cek jika ada upload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if (File::exists(public_path($news->imagePath))) {
                File::delete(public_path($news->imagePath));
            }
    
            // Upload gambar baru
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            
            $news->imagePath = 'images/' . $fileName;
        }
    
        $news->save();
    
        return redirect('/admin/news')->with('success', 'Berita berhasil diperbarui!');
    }
    
    public function destroy($id)
    {
        $news = News::findOrFail($id);
    
        // Hapus file gambar dari folder public/images
        if (File::exists(public_path($news->imagePath))) {
            File::delete(public_path($news->imagePath));
        }
    
        $news->delete();
    
        return redirect('/admin/news')->with('success', 'Berita berhasil dihapus!');
    }
}
