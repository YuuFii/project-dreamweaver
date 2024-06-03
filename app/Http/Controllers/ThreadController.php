<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreadController extends Controller
{
    public function create(Forum $forum)
    {
        return view('threads.create', compact('forum'), ['title' => 'Buat Thread Baru']);
    }

    public function store(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $thread = new Thread($request->all());
        $thread->user_id = auth()->id();
        $forum->threads()->save($thread);

        return redirect()->route('forums.threads.show', [$forum, $thread]);
    }

    public function show(Forum $forum, Thread $thread)
    {
        $posts = $thread->posts()->latest()->get();
        return view('posts.index', compact('thread', 'posts'), ['title'=>'Posts']);
    }

    public function like(Thread $thread)
    {
        $like = $thread->likes()->where('user_id', auth()->id())->first();

        if ($like) {
            $like->delete();
        } else {
            $thread->likes()->create(['user_id'=>auth()->id()]);
        }

        return back();
    }
}

