<?php
// app/Http/Controllers/AchievementController.php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\News;
use App\Models\SchoolAgenda;

class AchievementController extends Controller
{
    public function index()
    {
        $prestasis    = Achievement::latest('achievement_date')->paginate(8);
        $latesBerita  = News::latest('news_date')->take(4)->get();
        $latestAgenda = SchoolAgenda::latest('agenda_date')->take(4)->get();

        return view('prestasi', compact('prestasis', 'latesBerita', 'latestAgenda'));
    }

    public function show($id)
    {
        $prestasi = Achievement::findOrFail($id);

        return view('prestasi-show', compact('prestasi'));
    }
}