@extends('layouts/profile')

@section('content-class', 'flex bg-[#393E46] px-10 pb-10')

@section('content')
<section class="bg-white rounded-lg ml-12 p-10">
    <h2 class="font-bold text-2xl md:text-3xl text-[#F96D00] mb-7 ml-5">
      Bantuan
    </h2>
    <div class="flex sm:block flex-col gap-3 w-full items-start ml-5 sm:ml-0">
        @foreach (['List One', 'List Two', 'List Three', 'List Four'] as $list)
        <div class="accordion w-11/12 sm:m-5">
            <div class="contentBx">
                <div class="label p-1 sm:p-2 pl-3">{{ $list }}</div>
                <div class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                    fuga temporibus sequi hic? Quo quaerat recusandae vero doloribus
                    neque porro.
                </div>
            </div>
        </div>
        @endforeach
      
    </div>
    {{-- action="{{ route('help.store') }}" --}}
    {{-- <form id="contactForm" method=""  class="flex flex-col ml-5 mt-32"> --}}
      @csrf
      <input type="hidden" id="token" value="{{ @csrf_token() }}">
      <h3 class="font-bold text-2xl text-[#F96D00] mb-3">Hubungi Kami</h3>
      
      <div id="mail-status"></div>
      <span id="nama-info" class="info"></span><br/>
      <input
        type="text"
        name="nama"
        id="nama"
        placeholder="Masukkan nama Anda"
        autocomplete="off"
        class="inputBox bg-[#F2F2F2] border-none p-1 sm:p-3 rounded-md w-11/12"
      /><br />
      <span id="email-info" class="info"></span><br/>
      <input
        type="email"
        name="email"
        id="email"
        placeholder="Masukkan email Anda"
        autocomplete="off"
        class="inputBox bg-[#F2F2F2] border-none p-1 sm:p-3 rounded-md w-11/12"
      /><br />
      {{-- <span id="subjek-info" class="info"></span><br/>
      <input
        type="text"
        name="subjek"
        id="subjek"
        placeholder="Subjek"
        autocomplete="off"
        class="inputBox bg-[#F2F2F2] border-none p-1 sm:p-3 rounded-md w-11/12"
      /><br /> --}}
      <span id="isi-info" class="info"></span><br/>
      <textarea
        type="text"
        name="isi"
        id="isi"
        rows="7"
        placeholder="Isi"
        autocomplete="off"
        class="inputBox bg-[#F2F2F2] border-none p-1 sm:p-3 rounded-md w-11/12"
      ></textarea
      ><br />
      <button
        type="submit"
        class="bg-[#F96D00] text-white font-semibold sm:font-bold h-8 sm:h-9 w-4/12 sm:w-28 rounded-md hover:bg-secondaryMainBlue"
        >
        Kirim
      </button>
    </form>
  </section>
@endsection