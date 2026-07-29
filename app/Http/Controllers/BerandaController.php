<?php

namespace App\Http\Controllers;

use App\Models\PrincipalMessage;
use App\Models\SchoolAgenda;
use App\Models\Achievement;
use App\Models\News;
use App\Models\Extracurricular;

class BerandaController extends Controller
{
    public function index()
    {
        $principal      = PrincipalMessage::first();
        $agendas        = SchoolAgenda::orderBy('agenda_date', 'desc')->get();
        $achievements   = Achievement::orderBy('achievement_date', 'desc')->take(3)->get();
        $news           = News::orderBy('news_date', 'desc')->take(6)->get();
        $extracurriculars = Extracurricular::all();

        return view('beranda', compact('principal', 'agendas', 'achievements', 'news', 'extracurriculars'));
    }
}