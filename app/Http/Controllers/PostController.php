<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Thread;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request, Thread $thread)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $post = new Post($request->all());
        $post->user_id = auth()->id();
        $thread->posts()->save($post);

        return redirect()->route('forums.threads.show', [$thread->forum, $thread]);
    }

}
