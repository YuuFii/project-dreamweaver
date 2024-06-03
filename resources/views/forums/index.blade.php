@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
        <h1 class="text-2xl font-bold">Forums</h1>
        <a href="{{ route('forums.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Forum</a>
    </div>
    <div class="bg-white shadow-md rounded my-6">
        <ul>
            @foreach($forums as $forum)
                <li class="border-b p-4">
                    <a href="{{ route('forums.show', $forum) }}" class="text-blue-500">{{ $forum->name }}</a>
                    <p>{{ $forum->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection