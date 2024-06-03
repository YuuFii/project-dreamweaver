@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
        <h1 class="text-2xl font-bold">{{ $forum->name }}</h1>
        <a href="{{ route('forums.threads.create', $forum) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Thread</a>
    </div>
    <div class="bg-white shadow-md rounded my-6">
        <ul>
            @foreach($threads as $thread)
                <li class="border-b p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-bold">
                                <a href="{{ route('forums.threads.show', [$forum, $thread]) }}" class="text-blue-500">{{ $thread->title }}</a>
                            </h2>
                            <p class="text-gray-600 text-sm">Posted by {{ $thread->user->name }} on {{ $thread->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="flex items-center">
                            <form action="{{ route('threads.like', $thread) }}" method="POST">
                                @csrf
                                <button type="submit" class="flex items-center text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                    </svg>
                                    <span class="ml-1">{{ $thread->likes->count() }}</span>
                                </button>
                            </form>
                            <div class="flex items-center ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 16.666c0 1.333-1 2-2 2H5c-1 0-2-.667-2-2V6c0-1.333 1-2 2-2h1c1 0 1.667.667 2 2v1c.333-1.333 1-2 2-2h1c1 0 1.667.667 2 2v1c.333-1.333 1-2 2-2h1c1 0 2 .667 2 2v10.666z" />
                                </svg>
                                <span class="ml-1">{{ $thread->comments->count() }}</span>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2">{{ $thread->body }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection