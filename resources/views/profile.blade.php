@extends('layouts/profile')

@section('content-class', 'flex bg-[#393E46] px-10 pb-10')

@section('content')
<section class="flex-auto sm:flex-initial ml-5 sm:ml-12 bg-white rounded-lg w-full p-10">
    @if (session()->has('success'))
    <div
        role="alert"
        class="relative flex w-full px-4 py-4 text-base text-green-700 bg-green-100 border border-green-400 rounded-lg font-regular mb-5"
        data-dismissible="alert"
        id="notification"
    >
        <div class="mr-12 ">{{ session('success') }}</div>
        <button
            data-dismissible-target="alert"
            class="!absolute top-3 right-3 h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-white transition-all hover:bg-white/10 active:bg-white/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            id="close-btn"
        >
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="w-6 h-6"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
            </span>
        </button>
    </div>
    @endif
    <div class="flex items-center justify-between">
        <div
            class="flex flex-col sm:flex-row sm:justify-start mb-10"
        >
            <img
                src="/gambar/profil-kontak.svg"
                alt=""
                class="w-16 sm:w-24"
            />
            <div class="mt-4 sm:mt-0 sm:ml-10">
                <h2 class="font-bold text-lg sm:text-xl lg:text-4xl text-[#F96D00]">
                    {{ auth()->user()->name }}
                </h2>
            </div>
        </div>
        <div>
            <button id="editProfileBtn" class="bg-[#F96D00] text-white text-center font-bold px-5 sm:px-7 py-2 rounded-lg hover:bg-[#ffa159] transition ease-in-out">
                Ubah Profil
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-20 text-lg">
        <p class="font-semibold">Nama:</p>
        <p class="sm:col-start-2">{{ auth()->user()->name }}</p>
        <p class="font-semibold">Username:</p>
        <p class="sm:col-start-2">{{ auth()->user()->username }}</p>
        <p class="font-semibold">Jenis Kelamin:</p>
        <p class="sm:col-start-2">
            @if (auth()->user()->gender)
                {{ auth()->user()->gender }}
            @else
                Belum diisi
            @endif
        </p>
        <p class="font-semibold">Email:</p>
        <p class="sm:col-start-2">{{ auth()->user()->email }}</p>
        <p class="font-semibold">Nomor Telepon:</p>
        <p class="sm:col-start-2">{{ auth()->user()->phone }}</p>
    </div>

    @include('partials.edit-profile')
</section>
@endsection