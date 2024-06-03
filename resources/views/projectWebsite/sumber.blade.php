@extends('layouts.main2')

@section('content')
<div class="main1">
    <h1><b>Tips Persiapan Bekerja</b></h1>
</div>

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

<div class="main2">
    <h1><b>Seputar Pekerjaan</b></h1>
</div>

<div class="kotak-container2">

    @include('partials.kotak2', [
    'imageUrl' => 'svg/video1.svg',
    'judul' => 'Persiapan Diri Untuk Memasuki Dunia Kerja',
    'deskripsi2' => 'Untuk mempersiapkan diri saat memasuki dunia kerja? Apa saja yang harus dipersiapkan?',
    'link' => 'https://youtu.be/VzlVNxuTROU?si=86ckp30UO5Phh1xd'
])

    @include('partials.kotak2', [
    'imageUrl' => 'svg/video2.svg',
    'judul' => 'Apa Sih Dunia Kerja Menurut Generasi Z ?',
    'deskripsi2' => 'Di tengah tantangan bonus demografi, anak muda berperan penting dalam kemajuan negara.',
    'link' => 'https://youtu.be/6bxCAJIzfHM?si=rUz8QEfx4OROrCti'
])

    @include('partials.kotak2', [
    'imageUrl' => 'svg/video3.svg',
    'judul' => '5 Tips Persiapan Kerja Untuk Pemula',
    'deskripsi2' => 'Susah cari kerja? Mungkin lima tips dari kami bisa membantu kamu. Tetap semangat ya!',
    'link' => 'https://youtu.be/DTmYYQSbJig?si=taSPFiwc70Xd4KzF'
])

    @include('partials.kotak2', [
    'imageUrl' => 'svg/video4.svg',
    'judul' => '15 Ide Pekerjaan Buat Pemula Tanpa Skill Khusus',
    'deskripsi2' => 'Bingung mau kerja belum punya pengalaman ? Ini dia 15 ide pekerjaan yang cocok untuk kamu',
    'link' => 'https://youtu.be/3HRAJbLftmA?si=GUrSALz8uLJJ0Vl'
])

</div>

<div class="main3">
    <h1><b>Koleksi Buku</b></h1>
</div>

<div class="kotak-container4">

    @include('partials.kotak4', [
    'imageUrl' => 'svg/buku1.svg',
    'judul' => 'Motivasi Kerja Bagi Kaum Generasi Z',
    'deskripsi2' => 'Buku ini ditulis sebagai motivasi kerja yang berkaitan dengan generasi Z.',
    'link' => 'https://play.google.com/store/books/details/Bambang_S_Motivasi_Kerja_dan_Gen_Z?id=eKzuDwAAQBAJ&hl=id&gl=US'
])

    @include('partials.kotak4', [
    'imageUrl' => 'svg/buku2.svg',
    'judul' => 'Menikmati Perjalanan Mencari Kerja',
    'deskripsi2' => 'Buku ini ditulis untuk kamu yang baru pertama kali mencari pekerjaan',
    'link' => 'https://play.google.com/store/books/details/Samuel_Ray_Lagi_Probation_Menikmati_Perjalanan_Men?id=W8nTDwAAQBAJ&hl=id&gl=US'
])

    @include('partials.kotak4', [
    'imageUrl' => 'svg/buku3.svg',
    'judul' => 'Tips Sukses Cari Kerja di Luar Negeri',
    'deskripsi2' => 'Buku ini menyajikan berbagai strategi mendapatkan pekerjaan yang ada di luar negeri.',
    'link' => 'https://play.google.com/store/books/details/Yulita_Wibowo_dan_Hendra_Arifin_7_Tips_Sukses_Kinc?id=kb_LEAAAQBAJ&hl=id&gl=US'
])

    @include('partials.kotak4', [
    'imageUrl' => 'svg/buku4.svg',
    'judul' => 'Tip dan Trik Menghadapi Wawancara Kerja',
    'deskripsi2' => 'Buku ini dirancang khusus dengan tujuan memberikan tips wawancara',
    'link' => 'https://play.google.com/store/books/details/Yulita_Wibowo_dan_Hendra_Arifin_7_Tips_Sukses_Kinc?id=kb_LEAAAQBAJ&hl=id&gl=US'
])

</div>

@endsection