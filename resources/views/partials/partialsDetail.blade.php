<!-- resources/views/partials/_article.blade.php -->
<div class="card">
    <div class="card-header">
        <h1>{{ $artikel->judul }}</h1>
    </div>
    <div class="card-body">
        @if ($artikel->gambar)
            <img src="{{ asset('svg/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" style="width: 50%; height: auto;">
        @endif
        <div class="mt-3">
            <p><strong>Deskripsi Karir:</strong> {{ $artikel->deskripsi }}</p>
        </div>
        <div class="my-10">
            <a href="/artikel" class="btn btn-primary">Kembali ke Daftar Artikel</a>
        </div>
    </div>
</div>
