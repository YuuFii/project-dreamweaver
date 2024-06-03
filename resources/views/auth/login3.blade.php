<!doctype html>
<html>

<head>
    <title>DreamWeaver | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    
</head>

<body>
    @if (session()->has('success'))
    <div class="success-notif bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
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
    <div class="Utama">
        <div class="MainL1">
            <div class="SubMainL1">
                <img class="orang" src="{{ asset('svg/Login.svg') }}" alt="">
            </div>

            <form action="/login" method="POST">
                @csrf
                <div class="SubMainL12">
                    <h3 class="Title">Masuk</h3>
                    <div class="Form">
                        <p>Username</p>
                        <input type="text" name="username" id="username" required>
                        @error('username')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="Form">
                        <p>Password</p>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <p class="Forget"><u><a href="{{ url('/forget') }}">Lupa Password?</a></u></p>
                    <input type="submit" class="Login" name="submit" value="Masuk">
                    <!-- <button type="submit" class="Login">Login</button> -->

                    <p class="Daftar">Belum punya akun ? <u><a href="/register">Daftar</a></u></p>
                </div>
            </form>

        </div>
    </div>
</body>

</html> 

