@extends('layouts.template_sudah')
@section('title', 'E-Canteen Amikom ')

    @section('contents')
    <main class="relative bg-gray-100  ">
        <article class="w-[92%] mx-auto bg-white md:py-10 xs:py-4 xs:px-3 xl:px-16 gap-12 relative">
            <h1 class="font-bold text-xl text-slate-600 mb-4">Notifikasi</h1>
            <section>
                {{-- <button class="absolute top-16 right-16 text-black hover:text-blue-600 ">
                    Tandai sudah dibaca semua
                </button>  --}}
                <a href="/sudah-login-beranda" class="absolute sm:top-16 xs:top-8 xs:right-10 sm:right-16 bg-purple-900 shadow-md px-4 py-1 rounded-sm text-white hover:bg-blue-600">back</a>
                <div class="flex items-center border-b border-slate-300 py-4">
                    <div class="mr-4">
                        <img src="./assets/image/warung1.png" alt="" class="rounded-xl xs:w-16 md:w-20">
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Pesanan Selesai</h4>
                        <p class="text-sm">warung1</p>
                        <p class="text-sm">detail pesanan >></p>
                    </div>
                </div>
            </section>
            
        </article>
    </main>
    @endsection