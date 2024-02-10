<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(): void
    {
        $posts = Post::all();
        dump($posts);
    }

    public function create(): void
    {
        $postsArray = [
            [
                'title' => 'Some title',
                'content' => 'Another content',
                'image' => 'Best image',
                'likes' => 20,
                'is_published' => 20,
            ],
            [
                'title' => 'Some title 2',
                'content' => 'Another content 2',
                'image' => 'Best image 2',
                'likes' => 22,
                'is_published' => 22,
            ],
        ];

        foreach ($postsArray as $post) {
            Post::create($post);
        }

        dd('done');
    }

    public function update(): void
    {
        $post = Post::find(1);

        $post->update([
            'title' => 'Updated title',
            'content' => 'Updated content',
        ]);

        dd('done');
    }
}
