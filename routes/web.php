<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\NewsController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/category', function () {
    return view('pages.category');
});

Route::get('/category/{slug}', function ($slug) {
    return view('pages.category-articles', [
        'category' => $slug
    ]);
});

Route::get('/about', fn () => view('pages.about'));

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/article', function () {
    return view('pages.article');
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', fn () => view('admin.dashboard'));
    Route::resource('/news', NewsController::class);
});

