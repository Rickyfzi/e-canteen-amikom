@extends('layouts.template_sudah')
@section('title', 'E-Canteen Amikom ')

    @section('contents')
    <main class="bg-gray-100">
        <section>
            <article class="w-[92%] mx-auto bg-white md:py-10 xs:py-4 xs:px-3 xl:px-16 gap-12">
                <h1 class="font-bold text-xl text-slate-600 mb-4">Menu</h1>
                <!-- Counter 1 -->
                <section class="flex items-center border-b border-slate-300 py-4 justify-between">
                    <div>
                        <div class="mr-4">
                            <img src="./assets/image/menu/nasi goreng.svg" alt="" class="rounded-xl xs:w-16 md:w-20">
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Nasi goreng</h4>
                            <p class="text-sm">Rp.<span>15.000</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button data-counter="1" class="decrease flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            -
                        </button>
                        <span data-counter="1" class="counter text-lg text-black">0</span>
                        <button data-counter="1" class="increase flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            +
                        </button>
                    </div>
                </section>
            
                <!-- Counter 2 -->
                <section class="flex items-center border-b border-slate-300 py-4 justify-between">
                    <div>
                        <div class="mr-4">
                            <img src="./assets/image/menu/esteh.svg" alt="" class="rounded-xl xs:w-16 md:w-20">
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Es Teh</h4>
                            <p class="text-sm">Rp.<span>4.000</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button data-counter="2" class="decrease flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            -
                        </button>
                        <span data-counter="2" class="counter text-lg text-black">0</span>
                        <button data-counter="2" class="increase flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            +
                        </button>
                    </div>
                </section>
            
                <!-- Counter 3 -->
                <section class="flex items-center border-b border-slate-300 py-4 justify-between">
                    <div>
                        <div class="mr-4">
                            <img src="./assets/image/warung1.svg" alt="" class="rounded-xl xs:w-16 md:w-20">
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Nasi goreng</h4>
                            <p class="text-sm">Rp.<span>4.000</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button data-counter="3" class="decrease flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            -
                        </button>
                        <span data-counter="3" class="counter text-lg text-black">0</span>
                        <button data-counter="3" class="increase flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            +
                        </button>
                    </div>
                </section>
                <section class="flex items-center border-b border-slate-300 py-4 justify-between">
                    <div>
                        <div class="mr-4">
                            <img src="./assets/image/warung1.svg" alt="" class="rounded-xl xs:w-16 md:w-20">
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Nasi goreng</h4>
                            <p class="text-sm">Rp.<span>4.000</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button data-counter="4" class="decrease flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            -
                        </button>
                        <span data-counter="4" class="counter text-lg text-black">0</span>
                        <button data-counter="4" class="increase flex items-center justify-center w-8 bg-slate-100 border border-slate-300 focus:scale-105 text-black font-semibold rounded-md text-lg">
                            +
                        </button>
                    </div>
                </section>
            
                <div class="flex justify-end mt-4">
                    <button id="submit" class="px-6 py-3 bg-purple-900 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Submit
                    </button>
                </div>
            </article>
            
        </section>
    </main>
    @endsection