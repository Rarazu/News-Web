<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $articles = News::where('status', 'publish')
                        ->get();

        return view('home', compact('articles'));
    }
}


