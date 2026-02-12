<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Document;

// Halaman Home
Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    return view('home', ['posts' => $posts]);
})->name('home');

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// Halaman indeks berita
Route::get('/berita', function () {
    $posts = Post::latest()->filter(request(['search', 'category']))->paginate(9)->withQueryString();
    return view('news', ['posts' => $posts]);
})->name('news.index');

// Halaman Detail Berita
Route::get('/berita/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
})->name('posts.show');

// Halaman Layanan
Route::get('/layanan', function () {
    return view('services');
})->name('services');

// Halaman Tata Kelola
Route::get('/tata-kelola', function () {
    $documents = Document::all()->groupBy('category');
    return view('governance', ['documents' => $documents]);
})->name('governance');

// Halaman Manajemen
Route::get('/manajemen', function () {
    return view('management');
})->name('management');