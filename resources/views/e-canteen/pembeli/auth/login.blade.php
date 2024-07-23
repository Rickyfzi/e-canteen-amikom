<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>

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
    <main>
        <article class="relative flex xs:flex-col lg:flex-row xs:py-10 lg:py-11 xl:py-16 items-center xs:pb-32 sm:pb-56">
            <section class="flex justify-center lg:px-16 xl:px-32 xs:mx-12 md:mx-0">
                <div class="flex flex-col xs:items-center lg:items-start xs:justify-center lg:justify-start my-12">
                    <div class="flex flex-col items-center bg-gradient-to-r text-transparent bg-clip-text from-orange-500 to-yellow-500 py-3 xs:text-2xl sm:text-4xl md:text-5xl xl:text-5xl 2xl:text-6xl font-bold xs:text-center lg:text-start">
                        <img src="./assets/image/logo.svg" alt="" class="w-44">
                        <h1 class="flex flex-col items-center justify-center">Selamat datang 
                            <span> E-Canteen Amikom</span> 
                            <span> Yogyakarta</span>
                        </h1>
                    </div>
                </div>
                
            </section>
            <section class="xs:w-[90%] sm:w-[60%] lg:w-[40%] xl:w-[32%]  bg-violet-950 rounded-lg">
                <div class="flex justify-center flex-col py-10 my-10 ">
                    <span class="text-white text-3xl text-center mb-10 font-semibold">Masuk Akun</span>
                    <div class=" mx-auto mt-10 rounded-md">
                
                        <!-- Input Email -->
                        <div class="mb-4 relative">
                            <label for="email" class="block text-white">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 xs:p-2 sm:p-4 xs:w-60 sm:w-80 invalid:border-[#FF4646] border-2 bg-transparent text-sm xs:rounded-xl  sm:rounded-md  focus:ring focus:border-blue-200 placeholder-white text-white " placeholder="Masukkan Email Anda" required>
                            <div class="absolute right-0 top-1 gap-1 text-xs flex flex-row   text-[#FF4646]">
                                <img src="./assets/image/svg/alert.svg" alt="">
                                <span>Email telah digunakan</span>
                            </div>
                        </div>
                        
                        <div class="mb-2 relative">
                            <label for="password" class="block text-white">Password</label>
                            <input type="password" id="password" name="password" class="invalid:border-[#FF4646] mt-1 xs:p-2 sm:p-4 w-full bg-transparent border-2 xs:rounded-xl sm:rounded-md text-sm placeholder-white text-white focus:ring focus:border-blue-200 pr-10" placeholder="Masukkan Password Anda" required>
                            <div class="absolute xs:top-9 sm:top-10 right-0 flex items-center pr-3 cursor-pointer" id="togglePassword1">
                                <img src="./assets/image/svg/eyehide.svg" alt="" class="xs:w-6 sm:w-8 eye-show hidden">
                                <img src="./assets/image/svg/eyeshow.svg" alt="" class="xs:w-6 sm:w-8 eye-hide ">
                            </div>
                            <div class="absolute right-0 top-1 gap-1 text-xs flex flex-row text-[#FF4646]">
                                <img src="./assets/image/svg/alert.svg" alt="">
                                <span>8 - 6 karakter</span>
                            </div>    
                        </div>             
                        <a href="#" class=" text-white">Lupa Password?</a>        
                        <div class="flex items-center justify-center mt-20 mb-3">
                            <button type="submit" class="px-12 py-2 font-semibold bg-[#FFD600] text-white rounded-xl hover:bg-yellow-600 focus:outline-none ">
                                Masuk
                            </button>
                        </div> 
                        <div class="flex justify-center gap-2 ">
                            <span class="text-white text-sm font-light">Belum Punya Akun?</span>
                            <a href="/pemagang-register" class="text-[#FFD600] text-sm font-semibold">Daftar</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <img src="./assets/image/ornament/ornamen1.svg" alt="" class="absolute left-0 top-0 xs:hidden lg:block -z-10 sm:w-36 lg:w-52 xl:w-64 2xl:w-72">
            <img src="./assets/image/ornament/ornamen2.svg" alt="" class="absolute right-0 bottom-0 xs:hidden lg:block -z-10 sm:w-36 lg:w-52 xl:w-56 2xl:w-64 ">
            <img src="./assets/image/ornament/ornamenhp2.svg" alt="" class="absolute right-0 top-0 xs:block lg:hidden -z-10 xs:w-36 sm:w-60">
            <img src="./assets/image/ornament/ornamenhp3.svg" alt="" class="absolute left-0 bottom-0 xs:block lg:hidden -z-10 xs:w-44 sm:w-72">
         
        </article>
    </main>
</body>
</html>