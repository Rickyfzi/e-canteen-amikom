<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('e-canteen.beranda');
});

// pembeli
Route::get('/login', function () {
    return view('e-canteen.pembeli.auth.login');
});
Route::get('/sudah-login-beranda', function () {
    return view('e-canteen.pembeli.beranda_sudah');
});
Route::get('/menu-warung', function () {
    return view('e-canteen.pembeli.warung_menu');
});
Route::get('/notifikasi', function () {
    return view('e-canteen.pembeli.notifikasi');
});
Route::get('/keranjang', function () {
    return view('e-canteen.pembeli.keranjang');
});
