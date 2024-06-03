@extends('layouts/main-loggedin')

@section('content')
<div class="mx-8 mt-24">
    <a href="profil.html" class="hover:text-secondLightGray">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        class="w-[50px]"
        >
            <path
            fill="currentColor"
            fill-rule="evenodd"
            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10m-.47-13.53a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72H16a.75.75 0 0 0 0-1.5H9.81l1.72-1.72a.75.75 0 0 0 0-1.06"
            clip-rule="evenodd"/>
        </svg>
    </a>
</div>
<h2 class="font-bold text-[#F96D00] text-3xl sm:text-5xl my-4 text-center">
    Tentang Kami
</h2>
<div class="flex flex-col items-center sm:flex-row m-10 mt-0">
    <img src="/gambar/foto-orang.svg" alt="" class="people-img" />
    <div class="px-20 text-center sm:text-start sm:px-0">
        <p class="max-w-xl">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>

<h2 class="font-bold text-[#F96D00] text-2xl mb-4 mt-20 text-center">
    Apa yang Kami Lakukan?
</h2>
<div class="flex flex-col items-center sm:grid sm:grid-cols-3 sm:place-items-center mx-20 mb-20">
    <div class="bg-mainBlue text-white p-4 w-9/12 rounded-lg mb-5">
        <h3 class="font-bold text-xl mb-3">Lipsum</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam
            molestias! Voluptates nostrum minima aliquam. Eaque fuga et quam
            dolor.
        </p>
    </div>
    <div class="bg-mainBlue text-white p-4 w-9/12 rounded-lg mb-5">
      <h3 class="font-bold text-xl mb-3">Lipsum</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam
        molestias! Voluptates nostrum minima aliquam. Eaque fuga et quam
        dolor.
      </p>
    </div>
    <div class="bg-mainBlue text-white p-4 w-9/12 rounded-lg mb-5">
      <h3 class="font-bold text-xl mb-3">Lipsum</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam
        molestias! Voluptates nostrum minima aliquam. Eaque fuga et quam
        dolor.
      </p>
    </div>
</div>
@endsection
