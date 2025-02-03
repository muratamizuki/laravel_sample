<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Post;


class PostController extends Controller
{
    public function show($id) {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));
    }
}