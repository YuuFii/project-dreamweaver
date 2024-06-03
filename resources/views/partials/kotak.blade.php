<div class="Kotak">
    @if ($w->gambar)
        <img src="{{ asset('svg/' . $w->gambar) }}" alt="{{ $w->judul }}">
    @else
        <img class="" src="svg/eksplorasi.svg" alt="No Image" style="width: 100px; height: auto;">
    @endif
    <h1><b>{{ $w->judul }}</b></h1>
    <div>
        @php
            // Split deskripsi menjadi array kata-kata
            $words = explode(' ', $w->deskripsi);
            // Ambil 20 kata pertama
            $highlightedDescription = implode(' ', array_slice($words, 0, 10));
            // Tambahkan elipsis jika deskripsi lebih panjang dari 20 kata
            if (count($words) > 20) {
                $highlightedDescription .= '...';
            }
        @endphp
        <p>{{ $highlightedDescription }}</p>
    </div>
    <a class="selengkapnya" href="{{ route('detail-artikel', $w->id) }}">Selengkapnya</a> <!-- Perubahan disini -->
</div>
