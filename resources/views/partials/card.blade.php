<!-- views/partials/card.blade.php -->
@php
    $deskripsi = implode(' ', array_slice(explode(' ', $artikel->deskripsi), 0, 10)) . '...';
@endphp
<div class="flex-none w-1/2 md:w-1/3 md:pb-4 border rounded-lg">
    <a href="#" class="space-y-4">
        <div class="aspect-w-16 aspect-h-9">
            <img class="object-cover shadow-md hover:shadow-xl rounded-lg"
                 src="/svg/{{ $artikel->gambar }}"
                 alt="{{ $artikel->judul }}">
        </div>
        <div class="px-4 py-2">
            <div class="text-lg leading-6 font-medium space-y-1">
                <h3 class="font-bold text-gray-800 text-3xl mb-2">{{ $artikel->judul }}</h3>
            </div>
            <div class="text-lg">
                <p>{{ $deskripsi }}</p>
                <a class="font-medium text-sm text-indigo-600 mt-2" href="{{ route('detail-artikel', $artikel->id) }}">
                    Selengkapnya<span class="text-indigo-600">&hellip;</span>
                </a>
            </div>
        </div>
    </a>
</div>
