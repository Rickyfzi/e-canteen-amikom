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
    

    <header id="navbar" class="bg-white  flex items-center md:h-20 top-0 sticky z-50 shadow-dream-C">
        <nav class="flex relative justify-between items-center w-full md:w-[92%] md:mx-auto px-[4%] md:px-0 text-md font-medium">
            <div class="flex items-center gap-3 ">
                <a href="/">
                    <img src="./assets/image/logo.svg" alt="" class="sm:w-12 w-20 py-1 shrink-0">
                </a>
                <h1 class="text-purple-900 flex flex-col">Universitas Amikom <span> Yogyakarta</span></h1>
            </div>      
            <div class="flex flex-row ">
                <div class="flex items-center sm:gap-8 xs:gap-4">
                    <!-- Button to trigger notification -->
                    <button id="showNotification" class=" text-white px-4 py-2 rounded">
                        <img src="./assets/image/icon/notif.svg" alt="" class="w-6">
                    </button>

                    <!-- Notification container -->
                    <div id="notification" class="fixed top-4 xs:right-0  md:right-4 bg-white border-l-4 border-purple-600 p-4 rounded shadow-lg notification-hidden">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="mr-4">
                                    <img src="./assets/image/icon/notif.svg" alt="" class="">
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Notification Title</h4>
                                    <p class="text-sm">This is an example of an elegant notification message.</p>
                                </div>
                            </div>
                            <button id="hideNotification" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <label for="profileToggle" class="text-gray-600 hover:text-gray-800 cursor-pointer">
                        <img src="./assets/image/icon/profil.svg" alt="" class="w-6">
                    </label>
                </div>
        
            </div>

        </nav>
    </header>

    <input type="checkbox" id="profileToggle" class="hidden">
    <div id="profileSidebar" class="fixed z-50 top-0 right-0 h-full bg-white shadow-lg sidebar hidden-sidebar">
        <div class="p-4 relative">
            <label for="profileToggle" class="absolute top-2 right-0 px-4 py-2 text-black rounded cursor-pointer">x</label>
            <h2 class="text-lg font-semibold mt-6 text-center">Profil</h2>
            <div class="flex justify-center mt-6">
                <img src="./assets/image/profile-photo.jpg" alt="Profile Photo" class="w-40 h-40 rounded-full border-4 border-gray-300">
            </div>
            <div class="mt-4 text-center">
                <p>Nama: John Doe</p>
                <p>Email: johndoe@example.com</p>
            </div>
            <div class="p-4 ">
                <a href="/logout" class="block text-center bg-purple-900 text-white py-2 px-4 rounded">Logout</a>
            </div> 
        </div>
    </div>
    @yield('contents') 
</body>

</html>