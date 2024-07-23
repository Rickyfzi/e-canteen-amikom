@extends('layouts.template_sudah')
@section('title', 'E-Canteen Amikom ')

    @section('contents')
    <main class="bg-gray-100">
        <article class="w-[92%] mx-auto bg-white md:py-10 xs:py-4 xs:px-3 xl:px-16 gap-12">
            <h1 class="font-bold text-xl text-slate-600 mb-4">Nama Warung</h1>
            <section class="flex flex-col md:flex-row">
                <!-- Detail Pesanan -->
                <section class="w-full md:w-1/2 p-4">
                    <div>
                        <h2 class="text-lg font-bold mb-2">Detail Pesanan Anda</h2>
                        <div class="flex flex-row items-center  gap-2">
                            <img src="./assets/image/menu/nasi goreng.png" alt="">
                            <div class="flex flex-col">
                                <p>Nasi Goreng</p>
                                <p><span>1</span>x</p>
                                <p>Rp. <span>15.000</span></p>
                            </div>
                        </div>
                        <!-- Tambahkan detail pesanan lainnya di sini -->
                        <p class="mt-4 font-semibold">Total: Rp. 19.000</p>
                    </div>
                </section>
                <!-- QRIS -->
                <section class="w-full md:w-1/2 p-4 flex justify-center items-center">
                    <div>
                        <h2 class="text-lg font-bold mb-2">Bayar dengan QRIS</h2>
                        <img src="./assets/image/qris.png" alt="QRIS" class="w-40 h-40">
                        <p class="text-center mt-2">Scan QRIS di atas</p>
                    </div>
                </section>
            </section>
        </article>
        
    </main>
    @endsection
    