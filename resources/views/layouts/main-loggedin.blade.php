<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DreamWeaver | {{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
    @yield('style')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;900&family=Poppins:wght@200;400;600;700;900&display=swap"
      rel="stylesheet"
    />
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
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.3.6.3/jquery.min.js"></script>
</head>
<body>
    @include('partials.logged-navbar')

    <div class="mt-24 @yield('container-style')">
        @yield('content')
    </div>

    @include('partials.footer')
    
    <script src="/js/script.js"></script>
    @yield('scripts')
</body>
</html>