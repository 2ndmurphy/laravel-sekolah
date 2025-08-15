<?php


use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home',
        ['title' => 'Ini Halaman Home']
    );
});

Route::get('/about', function () {
    return view('about',
        ['title' => 'Ini Halaman About']
    );
});

Route::get('/posts', function () {
    return view('posts',
        ['title' => 'Ini Halaman Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact',
        ['title' => 'Ini Halaman Contact']
    );
});

Route::get('/post/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Halaman Single Post', 'post' => $post]);
});

Route::get('/menu', [MenuController::class,'index']);

