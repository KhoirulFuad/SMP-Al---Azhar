<?php

use Illuminate\Support\Facades\Route;
use App\Models\Prestasi;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

// List prestasi
Route::get('/prestasi', function () {
    $prestasis = \App\Models\Prestasi::latest()->paginate(10);
    return view('prestasi', compact('prestasis'));
})->name('prestasi.index');

// Detail prestasi - view-nya harus BERBEDA dari list
Route::get('/prestasi/{id}', function ($id) {
    $prestasi = \App\Models\Prestasi::findOrFail($id);
    return view('prestasi_detail', compact('prestasi'));
})->name('prestasi.show');