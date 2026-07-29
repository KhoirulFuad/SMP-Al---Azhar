<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\SchoolAgenda;

class NewsController extends Controller
{
    public function index()
    {
        $beritas       = News::orderBy('news_date', 'desc')->paginate(5);
        $latestPrestasi = Achievement::latest('achievement_date')->take(4)->get();
        $latestAgenda   = SchoolAgenda::latest('agenda_date')->take(4)->get();

        return view('berita', compact('beritas', 'latestPrestasi', 'latestAgenda'));
    }
    public function show($slug)
    {
        $berita = News::where('slug', $slug)->firstOrFail();
        $lainnya = News::where('id', '!=', $berita->id)
                    ->latest('news_date')
                    ->take(4)
                    ->get();

        return view('berita-detail', compact('berita', 'lainnya')); // ← ganti ini
    }
}