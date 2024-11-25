<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/posts', function (Request $request) {
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
});
