@extends('layouts.main2')

@section('content')
<div class="tentang">
    <b>
        <h1>Tentang Kami</h1>
    </b>
</div>

<div class="container-tentang">
    <div class="perusahaan">
        <img src="svg/tentang.svg" alt="">
    </div>

    <div>
        <p>Selamat datang di DreamWeavers, destinasi utama untuk eksplorasi karir di bidang IT. Kami adalah perusahaan
            yang berdedikasi untuk membantu individu menemukan jalur karir yang tepat dalam industri teknologi informasi
            melalui platform yang interaktif dan informatif. Kami berkomitmen untuk menciptakan lingkungan yang inklusif
            dan suportif bagi semua pengguna kami. DreamWeavers percaya bahwa kesuksesan karir dimulai dengan akses ke
            informasi dan dukungan yang tepat, dan kami bertekad untuk menjadi mitra yang dapat diandalkan dalam
            perjalanan karir Anda. Bergabunglah dengan kami di DreamWeavers dan mulailah eksplorasi karir IT Anda dengan
            percaya diri. Kami di sini untuk membantu Anda setiap langkah, dari pembelajaran awal hingga mencapai puncak
            kesuksesan dalam karir IT Anda.
        </p>
    </div>
</div>

<div class="tentang">
    <b>
        <h1>Apa Yang Kita Lakukan ?</h1>
    </b>
</div>

<div class="kotak-container5">
    @include('partials.kotak5', [
    'judul4' => 'Fitur Eksplorasi',
    'deskripsi4' => 'Platform kami menyediakan informasi lengkap tentang berbagai jalur karir di bidang IT, mulai dari pengembangan perangkat lunak, keamanan siber, data analitik, hingga manajemen proyek IT'
])

    @include('partials.kotak5', [
    'judul4' => 'Fitur Diskusi',
    'deskripsi4' => 'Kami menyediakan fitur diskusi yang memungkinkan Anda untuk berinteraksi dengan sesama pengguna dan profesional di bidang IT. Diskusikan topik terkini, tukar pengalaman, dan mendapat wawasan'
])

    @include('partials.kotak5', [
    'judul4' => 'Fitur Sumber Informasi',
    'deskripsi4' => 'Kami menyediakan berbagai sumber daya belajar, termasuk artikel, video, dan buku yang dirancang untuk meningkatkan keterampilan dan pengetahuan Anda dalam mencari pekerjaan.'
])
</div>

@endsection