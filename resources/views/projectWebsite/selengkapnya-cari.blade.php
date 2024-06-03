@extends('layouts.main2')

@section('content')
<div class="col-md-4 kotakUtama">
    <form method="GET" action="{{ route('selengkapnya-cari') }}">
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

<h1 class="judul" ><b>Eksplorasi Karir</b></h1>

<div class="row">
    @foreach ($artikels as $w)
        <div class="col-md-4">
            @include('partials.kotak', ['w' => $w])
        </div>
    @endforeach
</div>
@endsection

{{ $artikels->links() }}