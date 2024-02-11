<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create(): View
    {
        return view('post.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(Post $post): View
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('post.edit', compact('post'));
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        $request->update($data);

        return redirect()->route('post.show', $request->id);
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('post.index');
    }

    public function delete(): void
    {   //Recovery
        $post = Post::withTrashed()->find(2);
        $post->restore();
    }
}
