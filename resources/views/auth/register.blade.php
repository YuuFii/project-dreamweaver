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
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white flex items-center">
            <div class="p-14 flex-1">
                <h2 class="uppercase text-center text-[24px] font-semibold mb-10">daftar</h2>
    
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-5 flex space-x-5">
                        <div class="flex-1">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="w-full h-8 border border-[#71839B] rounded-md">
                        </div>
                        <div class="flex-1">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="w-full h-8 border border-[#71839B] rounded-md">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="email">Alamat Email</label>
                        <input type="email" name="email" id="email" class="w-full h-8 border border-[#71839B] rounded-md">
                    </div>
                    <div class="mb-5">
                        <label for="phone">Nomor Handphone</label>
                        <input type="tel" name="phone" id="phone" class="w-full h-8 border border-[#71839B] rounded-md">
                    </div>
                    <div class="mb-5">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-full h-8 border border-[#71839B] rounded-md">
                    </div>
                    <button type="submit" class="w-full bg-[#F96D00] rounded-full h-8 text-white font-semibold">Daftar</button>
                    <div class="text-center mt-3">Sudah punya akun? <a href="/login" class="text-blue-700 underline">Masuk</a></div>
    
                </form>
            </div>
            <div class="flex-1">
                <img src="/gambar/Rectangle 5.svg" alt="">
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