<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: "#da373d",
                mainBlue: "#4076FF",
                secondaryGray: "#71839B",
                lightGray: "#f9f9f9",
                secondLightGray: "#c1c1c1",
              },
              fontFamily: {
                poppins: ["Poppins"],
              },
            },
          },
        };
    </script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-[#393E46]">
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">
            {{ session('success') }}
        </span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>
    @endif

    @if (session()->has('loginError'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">
            {{ session('loginError') }}
        </span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>
    @endif
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white flex items-center p-10">
            <div>
                <img src="/gambar/Rectangle 5.svg" alt="">
            </div>
            <div class="py-20 px-28">
                <h2 class="uppercase text-center text-[24px] font-semibold mb-10">Masuk</h2>
    
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-5">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="w-full h-8 border border-[#71839B] rounded-md" >
                        @error('username')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-full h-8 border border-[#71839B] rounded-md" >
                    </div>
                    <div class="flex justify-end mb-5">
                        <a href="#" class="text-blue-700 underline">Lupa Password?</a>
                    </div>
                    <button type="submit" class="w-full bg-[#F96D00] rounded-full h-8 text-white font-semibold">Login</button>
                    <div class="text-center mt-3">Belum punya akun? <a href="/register" class="text-blue-700 underline">Daftar</a></div>
    
                </form>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');

        togglePasswordButton.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
</body>
</html>