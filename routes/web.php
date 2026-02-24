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

// Halaman Utama Layanan
Route::get('/layanan', function () {
    return view('services.index'); 
})->name('services');

// Halaman Detail AMC Pembangkit
Route::get('/layanan/amc-pembangkit', function () {
    return view('services.amc-pembangkit');
})->name('services.amc-pembangkit');

// Halaman Detail Transmisi & Distribusi
Route::get('/layanan/transmisi-distribusi', function () {
    return view('services.transmisi-distribusi');
})->name('services.transmisi-distribusi');

// Halaman DRUPS & Beyond kWh
Route::get('/layanan/drups-beyond-kwh', function () {
    return view('services.drups');
})->name('services.drups');

// Halaman ListriQu
Route::get('/layanan/pelayanan-pelanggan', function () {
    return view('services.pelanggan');
})->name('services.pelanggan');

// Halaman Tata Kelola
Route::get('/tata-kelola', function () {
    $documents = Document::all()->groupBy('category');
    return view('governance', ['documents' => $documents]);
})->name('governance');

// Halaman Manajemen
Route::get('/manajemen', function () {
    return view('management');
})->name('management');

// Halaman Anak Perusahaan
Route::get('/anak-perusahaan', function () {
    return view('subsidiaries');
})->name('subsidiaries');