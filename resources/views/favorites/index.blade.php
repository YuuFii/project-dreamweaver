@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Artikel Favorit</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @forelse($favorites as $favorite)
            <li>
                <a href="{{ route('artikel.show', $favorite->artikel->id) }}">{{ $favorite->artikel->judul }}</a>
                <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </li>
        @empty
            <p>Tidak ada artikel favorit.</p>
        @endforelse
    </ul>
</div>
@endsection
