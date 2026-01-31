<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

Route::get('/', [NewsController::class, 'index']);
Route::get('/article/{id}', [NewsController::class, 'show'])->name('article.detail');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

// Route::get('/category', function () {
//     return view('pages.category');
// });

// Route::get('/category/{slug}', function ($slug) {
//     return view('pages.category-articles', [
//         'category' => $slug
//     ]);
// });

Route::get('/about', fn () => view('pages.about'));

Route::get('/login', function () {
    return view('auth.login');
});


// Route::get('/article', function () {
//     return view('pages.article');
// });

// Route::get('/article/{id}', [ArticleController::class, 'show']);


Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route::middleware('admin')->prefix('admin')->group(function () {
//     Route::get('/dashboard', fn () => view('admin.dashboard'));
//     Route::resource('/news', AdminNewsController::class);
// });

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', fn () => view('admin.dashboard'));
    
    Route::resource('/news', AdminNewsController::class)->parameters([
        'news' => 'id'
    ]);
});

