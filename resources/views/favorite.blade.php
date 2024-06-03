@extends('layouts/profile')

@section('content-class', 'flex bg-[#393E46] px-10 pb-10')

@section('content')
<section class="sm:ml-8 flex-2 lg:flex-initial bg-white rounded-lg ml-12 p-10">
    <h2
      class="font-bold text-3xl lg:text-5xl text-center sm:text-start text-[#F96D00]"
    >
      Favorit
    </h2>
    <p class="text-sm lg:text-lg text-center sm:text-start">
      Lorem ipsum dolor sit amet consectetur.
    </p>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-5">
        @for ($i = 0; $i < 4; $i++)
            @include('partials.favorite-card')
        @endfor
    </div>
  </section>
@endsection