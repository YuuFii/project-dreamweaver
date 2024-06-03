<i
    id="sidebar-btn"
    class="ph ph-squares-four text-3xl mb-5 block sm:hidden"
></i>
<aside id="sidebar-menu" class="bg-white rounded-lg sm:max-w-60 hidden sm:block w-full h-[520px]">
    <div
      class="flex flex-col items-center text-center p-6"
    >
      <img src="/gambar/profil-kontak.svg" alt="" class="lg:w-20" />
      <h2 class="font-bold mt-3 lg:text-xl">Hi, {{ auth()->user()->username }}</h2>
    </div>
    <div class="flex justify-center">
        <div class="w-10/12 border-b-2 border-black"></div>
    </div>
    <ul class="px-5 space-y-3 lg:space-y-5 my-5 sm:mt-3 lg:mt-5 lg:text-xl">
      <li>
            <a
                href="/profile"
                class="flex items-center space-x-2 hover:text-secondLightGray transition ease-in-out delay-75"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="w-[42px] text-[#F96D00]"
                >
                    <g fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linejoin="round" d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"/>
                        <circle cx="12" cy="7" r="3"/>
                    </g>
                </svg>
                <span class="font-semibold">Profil Saya</span>
            </a>
      </li>
      {{-- <li>
        <a
          href="/favorite"
          class="flex items-center space-x-2 hover:text-secondLightGray transition ease-in-out delay-75"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                class="h-[42px] text-[#F96D00]"
            >
                <path
                fill="currentColor"
                fill-rule="evenodd"
                d="m8 9.524l.976.837l2.988 2.56a.325.325 0 0 0 .536-.246V4.5A1.5 1.5 0 0 0 11 3H5a1.5 1.5 0 0 0-1.5 1.5v8.175a.325.325 0 0 0 .536.247l2.988-2.56zM14 4.5a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v8.175a1.825 1.825 0 0 0 3.013 1.386L8 11.5l2.987 2.56A1.825 1.825 0 0 0 14 12.676z"
                clip-rule="evenodd"/>
            </svg>
            <span class="font-semibold">Favorit</span>
        </a>
      </li> --}}
      <li>
        <a
          href="/help"
          class="flex items-center space-x-2 hover:text-secondLightGray transition ease-in-out delay-75"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="h-[42px] text-[#F96D00]"
            >
                <path
                    fill="currentColor"
                    d="M11.95 18q.525 0 .888-.363t.362-.887t-.362-.888t-.888-.362t-.887.363t-.363.887t.363.888t.887.362m-.9-3.85h1.85q0-.825.188-1.3t1.062-1.3q.65-.65 1.025-1.238T15.55 8.9q0-1.4-1.025-2.15T12.1 6q-1.425 0-2.312.75T8.55 8.55l1.65.65q.125-.45.563-.975T12.1 7.7q.8 0 1.2.438t.4.962q0 .5-.3.938t-.75.812q-1.1.975-1.35 1.475t-.25 1.825M12 22q-2.075 0-3.9-.787t-3.175-2.138T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/>
            </svg>
            <span class="font-semibold">Bantuan</span>
        </a>
      </li>
      <li>
        <a
          href="/tentangKami"
          class="flex items-center space-x-2 hover:text-secondLightGray transition ease-in-out delay-75"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="h-[42px] text-[#F96D00]"
            >
                <path
                    fill="currentColor"
                    d="M11 9h2V7h-2m1 13c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-1 15h2v-6h-2z"/>
            </svg>
            <span class="font-semibold">Tentang Kami</span>
        </a>
      </li>
      <li class="border-b-2 sm:border-none pb-4 sm:pb-0">
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="flex items-center space-x-2 hover:text-secondLightGray transition ease-in-out delay-75">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            class="h-[42px] text-[#F96D00]"
            >
                <g
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                >
                    <path d="M10 8V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2v-2"/>
                    <path d="M15 12H3l3-3m0 6l-3-3"/>
                </g>
            </svg>
            <span class="font-semibold">Keluar</span>
          </button>
        </form>
      </li>
    </ul>
  </aside>