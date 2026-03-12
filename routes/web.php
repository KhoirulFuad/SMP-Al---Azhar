<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profilkami');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});