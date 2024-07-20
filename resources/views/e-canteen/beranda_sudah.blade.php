@extends('layouts.template_sudah')
@section('title', 'E-Canteen Amikom ')

    @section('contents')
    <main class="relative bg-gray-100  ">
        <img src="./assets/image/banner.svg" alt="" class="w-full mb-12">
        <article class="w-[92%] mx-auto bg-white md:py-10 xs:py-4 xs:px-3 xl:px-16 rounded-3xl gap-12">
            <section class="md:mt-12 xs:mt-3 mb-8">
                <h1 class="text-5xl font-bold text-purple-900 text-center">Lapar? Pesan Sekarang!</h1>
            </section>
            <section class="flex flex-col md:flex-row gap-6 mb-8 px-4 sm:px-8 lg:px-16 w-ful">
                <!-- Search Input -->
                <div class="flex flex-row items-center w-full md:w-4/5">
                    <input type="text" id="search" class="w-full px-4 py-2 bg-gray-100 rounded-full shadow-sm focus:outline-none focus:border-transparent" placeholder="Cari makanan...">
                </div>
                <div class="flex flex-row items-center gap-4 w-full md:w-1/5 justify-center">
                    <a href="/history" class="flex justify-center h-10 w-full md:w-24 px-4 py-2 bg-purple-900 text-white font-semibold rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                        <img src="./assets/image/history.svg" alt="" class="">
                    </a>
                    <a href="/keranjang" class="flex justify-center h-10 w-full md:w-24 px-4 py-2 bg-purple-900 text-white font-semibold rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 xs:hidden md:block">
                        <img src="./assets/image/chart.svg" alt="" class="">
                    </a>    
                    <a href="/keranjang" class="fixed bottom-10 right-6 z-50 shadow-md flex justify-center px-4 py-4 rounded-full bg-purple-900 text-white font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 md:hidden">
                        <img src="./assets/image/chart.svg" alt="" class="w-6">
                    </a>    
                </div>
            </section>
            <section class="mb-8">
                <h1 class="font-bold text-xl text-slate-600 ">Kategori</h1>
                <div class="w-full overflow-x-auto max-w-screen-xl">
                    <div class="flex flex-row gap-6 mt-6 min-w-max">
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-60">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                       
                        <!-- Tambahkan lebih banyak item jika diperlukan -->
                    </div>
                </div>
            </section>
            <section>
                <h1 class="font-bold text-xl text-slate-600">Makanan Favorit</h1>
                <div class="w-full overflow-x-auto max-w-screen-xl">
                    <div class="flex flex-row gap-3 mt-6 min-w-max">
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                        <div class="p-4">
                            <a href="/menu" class="block transform transition-transform hover:scale-105">
                                <img src="./assets/image/warung1.svg" alt="" class="rounded-xl w-40">
                                <h1 class="text-slate-600 text-center font-semibold mt-2">Warung 1</h1>
                            </a>
                        </div>
                    
                      
                       
                        <!-- Tambahkan lebih banyak item jika diperlukan -->
                    </div>
                </div>
            </section>
        </article>
    </main>
    @endsection
  