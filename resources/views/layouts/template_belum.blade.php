<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title') &#x2728;</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!DOCTYPE html>
    

   
    <header id="navbar" class="bg-white shadow-md flex items-center md:h-20 top-0 sticky z-50 shadow-dream-C">
        <nav class="flex relative justify-between items-center w-full md:w-[92%] md:mx-auto px-[4%] md:px-0 text-md font-medium">
            <div class="flex items-center gap-3 ">
                <a href="/">
                    <img src="./assets/image/logo.svg" alt="" class="sm:w-12 w-20 py-1 shrink-0">
                </a>
                <h1 class="text-purple-900 flex flex-col">Universitas Amikom <span> Yogyakarta</span></h1>
            </div>    
            <div class="flex flex-col ">
                <a href="/login" class="text-purple-900 p-2">Masuk</a>
            </div>

        </nav>
    </header>

    @yield('contents')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let lastScrollTop = 0;
            const navbar = document.getElementById('navbar');

            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    navbar.classList.remove('fade-in');
                    navbar.classList.add('fade-out');
                } else {
                    navbar.classList.remove('fade-out');
                    navbar.classList.add('fade-in');
                }
                
                lastScrollTop = scrollTop;
            });
        });
    </script>

</body>

</html>