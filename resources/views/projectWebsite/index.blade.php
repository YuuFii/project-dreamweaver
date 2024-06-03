<!doctype html>
<html>

<head>
    <title>Website</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
</head>

<body>
    <div class="Utama">
        <div class="MainL1">
            <div class="SubMainL1">
                <img class="orang" src="{{ asset('svg/Login.svg') }}" alt="">
            </div>

            <form action="/store" method="POST">
                @csrf
                <div class="SubMainL12">
                    <h3 class="Title">LOGIN</h3>
                    <div class="Form">
                        <p>Username</p>
                        <input type="text" name="username" required>
                    </div>

                    <div class="Form">
                        <p>Password</p>
                        <input type="password" name="password" required>
                    </div>

                    <p class="Forget"><u><a href="{{ url('/forget') }}">Forget Password?</a></u></p>
                    <input type="submit" class="Login" name="submit" value="Save">
                    <!-- <button type="submit" class="Login">Login</button> -->

                    <p class="Daftar">Belum punya akun ? <u><a href="{{ url('/daftar') }}">Daftar</a></u></p>
                </div>
            </form>

        </div>
    </div>
</body>

</html> 

