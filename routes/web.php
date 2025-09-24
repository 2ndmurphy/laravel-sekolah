<?php


use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
//    $posts = Post::with(['author', 'categories'])->latest()->get();

    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->get();

    return view('posts',
        ['title' => 'Ini Halaman Blog',
        'posts' => $posts
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

Route::get('/author/{user:username}', function (User $user) {
//    $posts = $user->posts->load('author', 'categories');
    return view('posts', ['title' => 'Halaman Penulis: ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
//    $posts = $category->posts->load('author', 'categories');
    return view('posts', ['title' => 'Halaman dengan Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/menu', [MenuController::class,'index']);

