<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forums.index', compact('forums'), ['title'=>'Forums']);
    }

    public function create()
    {
        return view('forums.create', [
            'title' => 'Buat Diskusi Baru'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Forum::create($request->all());
        return redirect()->route('forums.index');
    }

    public function show(Forum $forum)
    {
        $threads = $forum->threads()->latest()->get();
        return view('threads.index', compact('forum', 'threads'), ['title'=>'Thread']);
    }
}
