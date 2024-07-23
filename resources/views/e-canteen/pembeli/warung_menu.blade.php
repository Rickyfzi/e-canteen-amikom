@extends('layouts.template_sudah')
@section('title', 'E-Canteen Amikom ')

    @section('contents')
    <main class="bg-gray-100">
        <article class="w-[92%] mx-auto bg-white md:py-10 xs:py-4 xs:px-3 xl:px-16 gap-12 relative">
            <h1 class="font-bold text-xl text-slate-600 mb-4">Nama Warung</h1>
            <a href="/sudah-login-beranda" class="absolute sm:top-16 xs:top-8 xs:right-10 sm:right-16 bg-purple-900 shadow-md px-4 py-1 rounded-sm text-white hover:bg-blue-600">back</a>
            <div class="overflow-x-auto py-4">
                <table class="min-w-full divide-y divide-gray-200 rounded-md">
                    <thead class="bg-purple-900">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Menu
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-white uppercase tracking-wider">
                                Kuantitas
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Baris 1 -->
                        <tr data-price="15000">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <img src="./assets/image/menu/nasi goreng.png" alt="">
                                Nasi Goreng
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Rp. 15.000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end items-center gap-2">
                                    <button class="decrease flex items-center justify-center w-8 h-8 bg-slate-100 border border-slate-300 text-black font-semibold rounded-md text-lg">
                                        -
                                    </button>
                                    <span class="quantity text-lg text-black">0</span>
                                    <button class="increase flex items-center justify-center w-8 h-8 bg-slate-100 border border-slate-300 text-black font-semibold rounded-md text-lg">
                                        +
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Baris 2 -->
                        <tr data-price="4000">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <img src="./assets/image/menu/esteh.png" alt="">
                                Es Teh
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Rp. 4.000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end items-center gap-2">
                                    <button class="decrease flex items-center justify-center w-8 h-8 bg-slate-100 border border-slate-300 text-black font-semibold rounded-md text-lg">
                                        -
                                    </button>
                                    <span class="quantity text-lg text-black">0</span>
                                    <button class="increase flex items-center justify-center w-8 h-8 bg-slate-100 border border-slate-300 text-black font-semibold rounded-md text-lg">
                                        +
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Baris 3 -->
                        <tr data-price="20000">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <img src="./assets/image/menu/nasi goreng.png" alt="">
                                Mie Goreng
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Rp. 20.000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end items-center gap-2">
                                    <button class="decrease flex items-center justify-center w-8 h-8 bg-slate-100 border border-slate-300 text-black font-semibold rounded-md text-lg">
                                        -
                                    </button>
                                    <span class="quantity text-lg text-black">0</span>
                                    <button class="increase flex items-center justify-center w-8 h-8 bg-slate-100 border border-slate-300 text-black font-semibold rounded-md text-lg">
                                        +
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <!-- Total Price and Submit Button -->
            <div class="flex justify-end mt-4 gap-4">
                <div>
                    <p class="">Total harga: <span class="text-2xl text-purple-900">Rp</span> <span id="total-price" class="text-2xl text-purple-900">0</span></p>
                </div>
                <button id="submit" class="px-6 py-3 bg-purple-900 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
            </div>
        </article>
        
        
    </main>
    @endsection