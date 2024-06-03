@extends('layouts.main')

@section('content')

<div class="main-content flex flex-col md:flex-row md:items-center px-14 py-10">
    <div class="deskripsi order-1 md:order-none">
        <h1 class="uppercase text-[40px] md:text-[55px] font-semibold">Bingung dengan <br><span class="text-[#F96D00]">masa depan karirmu?</span></h1>
        <p class="text-[18px] md:text-[22px]">
            DreamWeavers menyediakan informasi dan konsultasi karir dengan para alumni untuk membantu mencerahkan masa depan karir anda
        </p>
        <div class="empty-space-1"></div>
        <div class="button-mulai-sekarang my-10">
            <a href="/artikel" class="bg-[#F96D00] hover:bg-[#fe8c35] text-white font-semibold px-8 py-3 rounded-full">Mulai Sekarang</a>
        </div>
        <!-- <button id="button-main-1">Mulai Sekarang</button> -->
    </div>
    <div class="img-deskripsi flex justify-center">
        <img src="/gambar/img-land-page.svg" alt="" class="w-3/5 md:w-full">
    </div>
</div>

<div class="empty-space-2"></div>

<div class="main-content-2 bg-[#393E46] px-14 pt-10">
    <h2 id="why" class="uppercase text-white text-[35px] md:text-[45px] font-semibold">Kenapa <span class="text-[#F96D00]">Dreamweaver?</span></h2>
    <div class="reason-table bg-white rounded-3xl flex justify-evenly text-center py-12 mt-5">
        <div class="reason-1">
            <h3 class="font-semibold text-[30px] md:text-[45px]">500++</h3>
            <p class="md:text-[22px]">Informasi Karir</p>
        </div>
        <div class="vertical-line border-l-2 border-l-black"></div>
        <div class="reason-2">
            <h3 class="font-semibold text-[30px] md:text-[45px]">1:1</h3>
            <p class="md:text-[22px]">Sesi dengan Alumni</p>
        </div>
        <div class="vertical-line border-l-2 border-l-black"></div>
        <div class="reason-3">
            <h3 class="font-semibold text-[30px] md:text-[45px]">700++</h3>
            <p class="md:text-[22px]">Sumber Belajar</p>
        </div>
    </div>

    <div class="additional text-white flex flex-col md:flex-row md:justify-between md:items-center mt-10">
        <div class="explanation">
            <h2 id="rediscover" class="uppercase font-semibold text-[30px] md:text-[45px]">Kenali Dirimu</h2>
            <p>
                Terhubung dengan industri dan alumni dari berbagai bidang,<br> eksplorasi minatmu dan temukan kembali dirimu bersama kami
            </p>
        </div>
        <div class="img-orang self-center mt-6 md:mt-0">
            <img src="/gambar/handsome-man.svg" alt="" class="h-80 md:h-96">
        </div>
    </div>
</div>

<div class="temukan-minat">
    <h2 class="uppercase font-semibold text-[35px] md:text-[45px] text-center py-10">Temukan Minatmu!</h2>

    <div class="card-wrapper">
        {{-- <img src="/gambar/next.svg" id="back-btn" alt=""> --}}
        <div
            id="scrollContainer"
            class="flex flex-nowrap space-x-5 overflow-x-scroll scrolling-touch items-start mb-8"
        >
            @foreach ($artikels as $artikel)
                @include('partials.card', ['artikel'=> $artikel])
            @endforeach
        </div>
        {{-- <img src="/gambar/next.svg" id="next-btn" alt=""> --}}
    </div>
</div>

{{-- Berita Terbaru --}}
<div class="kotakUtamaArtikel">
    <div class="kotakBesar">
        <img class="orang" src="svg/wawancara.svg" alt="">
        <div class="detail">
            <h3 class="tanggal">14 April 2024</h3>
            <h1 class="judulArtikel"><b>Interview Kerja Pertama Kali? Ikuti 8 Tips Ini agar Sukses!<h1></b>
                <p class="cuplikan">Pertama kali interview kerja? Tak perlu cemas, Glints kali ini hadir untuk
                    membantumu supaya tidak terlalu gugup meskipun pada interview kerja yang pertama kali....</p>
                <u><a class="selengkapnya2"
                        href="https://glints.com/id/lowongan/tips-interview-pertama-kali/">Selengkapnya</a></u>
        </div>
    </div>

    <div class="kotak-container33">
        @include('partials.kotak3', [
    'tanggal' => '24 April 2024',
    'imageUrl' => 'svg/sumber1.svg',
    'judul' => 'Ingin Cepat Kerja?',
    'deskripsi' => 'Ingin Cepat Kerja? Ini 7 Cara Efektif Mencari Kerja!....',
    'sumber' => 'https://glints.com/id/lowongan/tips-interview-pertama-kali/'
])

        @include('partials.kotak3', [
    'tanggal' => '9 Desember 2022',
    'imageUrl' => 'svg/sumber2.svg',
    'judul' => 'Tips Membuat CV yang Baik',
    'deskripsi' => 'Berikut tips membuat CV yang baik dan menarik....',
    'sumber' => 'https://www.detik.com/jatim/berita/d-6451018/tips-membuat-cv-yang-baik-dan-menarik-serta-contohnya'
])

        @include('partials.kotak3', [
    'tanggal' => '24 April 2024',
    'imageUrl' => 'svg/sumber3.svg',
    'judul' => 'Surat Lamaran yang Baik',
    'deskripsi' => 'Membuat surat lamaran kerja penting diketahui, khususnya bagi pencari kerja.... ',
    'sumber' => 'https://www.detik.com/sulsel/berita/d-6327325/cara-membuat-surat-lamaran-kerja-yang-baik-dan-benar-lengkap-beserta-tipsnya'
])
    </div>

</div>

{{-- <div class="pb-20">
    <h2 class="uppercase font-semibold text-[35px] md:text-[45px] text-center py-10">berita terbaru</h2>
    <div class="flex space-x-5 px-14">
        <div class="w-full lg:w-2/3 bg-[#393E46] text-white rounded-lg shadow-lg mb-6 lg:mb-0 flex">
            <img src="/gambar/image-1.jpg" alt="Artikel Utama" class="w-[55%] rounded-l-lg">
            <div class="p-5">
                <p class="text-sm mb-2">dd, mmm yyyy</p>
                <h2 class="text-2xl font-bold mb-2">Judul Artikel 1</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum...</p>
                <a href="#" class="text-blue-400 hover:underline">Selengkapnya</a>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex flex-col space-y-4">
            @for ($i = 0; $i < 3; $i++)
                @include('partials.article')
            @endfor
        </div>
    </div>
</div> --}}

<div class="info-alumni bg-[#393E46] px-14 pb-20">
    <h3 class="uppercase text-[35px] md:text-[45px] text-white font-semibold py-10">Terkoneksi dengan Alumni</h3>
    <div class="flex flex-col md:flex-row justify-evenly text-black">
        <div class="bg-white p-8 rounded-2xl flex flex-col w-2/5 relative">
            <h3 class="font-semibold text-[30px] mb-5">Forum Group</h3>
            <p class="mb-12">Bergabung dalam grup dan konsultasikan karirmu dengan para alumni</p>
            <button id="menuju-forum" class="w-[110px] h-[40px] bg-[#F96D00] text-white font-semibold self-end rounded-full mt-5 absolute bottom-6" onclick="redirectToForums()">Mulai</button>
        </div>
        <div class="bg-white p-8 rounded-2xl flex flex-col w-2/5 relative">
            <h3 class="font-semibold text-[30px] mb-5">Chat Pribadi</h3>
            <p class="mb-12">Bergabung dengan obrolan pribadi dan konsultasikan karirmu dengan para alumni</p>
            <button id="menuju-chat-pribadi" class="w-[110px] h-[40px] bg-[#F96D00] text-white font-semibold self-end rounded-full mt-5 absolute bottom-6" onclick="redirectToPrivateChat()">Mulai</button>
        </div>
    </div>
</div>

@endsection