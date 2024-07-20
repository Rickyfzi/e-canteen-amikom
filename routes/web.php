<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('e-canteen.beranda');
});
Route::get('/sudah-login-beranda', function () {
    return view('e-canteen.beranda_sudah');
});
Route::get('/menu-warung', function () {
    return view('e-canteen.warung_menu');
});
