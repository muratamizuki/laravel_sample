<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Coment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::create([
            'name' => '村田みゆき',
            'content' => 'トゥース',
            'user_id' => 1,
        ]);

        Comment::create([
            'author_name' => 'むらたみずき',
            'content' => 'ナイス初投稿',
            'post_id' => $post->id,
        ]);

        Comment::create([
            'author_name' => '村田',
            'content' => 'チョップ',
            'post_id' => $post->id,
        ]);
    }
}
