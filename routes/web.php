<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Document;

Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    return view('home', ['posts' => $posts]);
})->name('home');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/berita/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
})->name('posts.show');

Route::get('/layanan', function () {
    return view('services');
})->name('services');

Route::get('/tata-kelola', function () {
    $documents = Document::all()->groupBy('category');
    return view('governance', ['documents' => $documents]);
})->name('governance');

Route::get('/berita', function () {
    $posts = Post::latest()->filter(request(['search']))->paginate(9)->withQueryString();
    return view('news', ['posts' => $posts]);
})->name('news.index');

Route::get('/berita/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
})->name('posts.show');