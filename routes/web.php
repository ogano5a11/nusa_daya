<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    
    return view('home', ['posts' => $posts]);
});

Route::get('/tentang-kami', function () {
    return view('about');
});