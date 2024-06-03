@foreach($artikels as $artikel)
    <div>
        <h2>{{ $artikel->judul }}</h2>
        <p>{{ $artikel->deskripsi }}</p>
        <img src="{{ $artikel->gambar }}" alt="{{ $artikel->judul }}" style="width: 100px; height: auto;">

        @if(auth()->user()->favoriteArticles->contains($artikel->id))
            <form action="{{ route('favorites.remove', $artikel->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus dari Favorit</button>
            </form>
        @else
            <form action="{{ route('favorites.add', $artikel->id) }}" method="POST">
                @csrf
                <button type="submit">Tambah ke Favorit</button>
            </form>
        @endif
    </div>
@endforeach
