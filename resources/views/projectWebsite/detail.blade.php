@extends('layouts.main2')

@section('content')
<div class="mt-[70px]">
    <div class="row">
        <div class="col-md-12">
            @include('partials.partialsDetail', ['artikel' => $artikel])
        </div>
    </div>
</div>
@endsection
