@extends('layouts.main2')

@section('content')
<div class="containers">
    <div class="col-md-4 kotakUtama">
        <form id="search-form" method="GET" action="{{ route('selengkapnya-cari') }}">
            <div class="form-group">
                <div class="col-md-8">
                    <input type="text" name="cari" class="form-control" placeholder="Cari artikel...">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn-primary">Cari</button>
                </div>
            </div>
        </form>
    </div>

    <h1 class="judul"><b>Eksplorasi Karir</b></h1>

    @if($artikelRekomendasi->count() > 0)
        <h2 class="subjudul">Rekomendasi untuk Anda</h2>
        <div class="row" id="rekomendasi-container">
            @foreach ($artikelRekomendasi as $w)
                <div class="col-md-4">
                    @include('partials.kotak', ['w' => $w])
                </div>
            @endforeach
        </div>
        {{ $artikelRekomendasi->links('pagination::bootstrap-4', ['paginator' => $artikelRekomendasi]) }}
    @endif

    <h2 class="subjudul">Artikel Lainnya</h2>
    <div class="row" id="article-container">
        @foreach ($artikelLainnya as $w)
            <div class="col-md-4">
                @include('partials.kotak', ['w' => $w])
            </div>
        @endforeach
    </div>
    {{ $artikelLainnya->links('pagination::bootstrap-4', ['paginator' => $artikelLainnya]) }}
</div>
@endsection
