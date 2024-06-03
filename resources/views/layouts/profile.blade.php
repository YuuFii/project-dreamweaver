<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DreamWeaver | {{ $title }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="/css/style.css">
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
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="/js/script.js"></script>
</head>
<body>
    @include('partials.navbar')

    <div class="pt-28 w-full @yield('content-class')">
      @include('partials.profile-sidebar')  
      @yield('content')
    </div>

    @include('partials.footer')
    
    <script src="/js/script.js"></script>
    {{-- <script src="/js/editProfile.js"></script> --}}
    <script>
      const accordions = document.querySelectorAll(".contentBx");

      accordions.forEach((accordion) => {
        accordion.addEventListener("click", function () {
          this.classList.toggle("active");
        });
      });
    </script>
</body>
</html>