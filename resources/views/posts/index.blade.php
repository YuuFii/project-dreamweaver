@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-white shadow-md rounded my-6">
        <div class="border-b p-4">
            <h2 class="text-xl font-bold">{{ $thread->title }}</h2>
            <p>{{ $thread->body }}</p>
        </div>
        <ul>
            @foreach($posts as $post)
                <li class="border-b p-4">
                    <p>{{ $post->body }}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('threads.posts.store', $thread) }}" method="POST" class="bg-white shadow-md rounded p-4">
        @csrf
        <textarea name="body" class="w-full p-2 border rounded" rows="3"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Post</button>
    </form>
</div>
@endsection