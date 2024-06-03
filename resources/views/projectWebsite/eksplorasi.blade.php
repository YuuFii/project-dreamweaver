@extends('layouts.main2')

@section('content')

<div class="main">
    <div class="container1">
        <input type="text" class="cari" placeholder="Telusuri Karir...">
        <img class="searchIcon" src="svg/SearchIcon.svg" alt="">
        <form action=""></form>
    </div>
</div>

<div class="main2">
    <h1><b>Eksplorasi Karir</b></h1>
    <button id="filterLink" type="button" class="filter">Filter</button>
</div>

<div class="kotak-container">
    @for ($i = 0; $i < 4; $i++)
        @include('partials.kotak')
    @endfor
</div>

@include('partials.popup')

@endsection
