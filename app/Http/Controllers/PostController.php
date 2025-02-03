<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) {
        $post = Post::with('comments')->findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
    public function index(): Factory|View
    {
        $posts = Post::all();
        return view(view: 'posts.show', data: compact(var_name: 'posts'));
    }
}