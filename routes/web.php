<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\Achievement;
use App\Models\News;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AchievementController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Profil sekolah
Route::get('/profil', function () {
    $profil = \App\Models\SchoolProfile::first();
    return view('profil', compact('profil'));
})->name('profil');

// Sambutan Kepala Sekolah
Route::get('/sambutan', function () {
    $principal = \App\Models\PrincipalMessage::first();
    return view('sambutan', compact('principal'));
})->name('sambutan');

// List prestasi
Route::get('/prestasi', function () {
    $prestasis = \App\Models\Achievement::latest()->paginate(5);
    return view('prestasi', compact('prestasis'));
})->name('prestasi.index');

Route::get('/prestasi',      [AchievementController::class, 'index'])->name('prestasi.index');
Route::get('/prestasi/{id}', [AchievementController::class, 'show'])->name('prestasi.show');

// Detail prestasi
Route::get('/prestasi/{id}', function ($id) {
    $prestasi = \App\Models\Achievement::findOrFail($id);
    $lainnya = \App\Models\Achievement::where('id', '!=', $id)
                ->latest('achievement_date')
                ->take(4)
                ->get();
    return view('prestasi_detail', compact('prestasi', 'lainnya')); // tambah $lainnya
})->name('prestasi.show');

// Berita
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('berita.show');

// Agenda
Route::get('/agenda', function () {
    $agendas       = \App\Models\SchoolAgenda::latest('agenda_date')->paginate(5);
    $latestBerita  = \App\Models\News::latest('news_date')->take(4)->get();
    $latestPrestasi = \App\Models\Achievement::latest('achievement_date')->take(4)->get();

    return view('agenda', compact('agendas', 'latestBerita', 'latestPrestasi'));
})->name('agenda.index');

Route::get('/agenda/{id}', function ($id) {
    $agenda = \App\Models\SchoolAgenda::findOrFail($id);
    $lainnya = \App\Models\SchoolAgenda::where('id', '!=', $id)
                ->latest('agenda_date')->take(4)->get();
    return view('agenda_detail', compact('agenda', 'lainnya'));
})->name('agenda.show');