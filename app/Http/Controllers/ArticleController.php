<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = News::findOrFail($id);
        return view('pages.article', compact('article'));
    }

}
