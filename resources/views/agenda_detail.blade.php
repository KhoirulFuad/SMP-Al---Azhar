{{-- resources/views/agenda_detail.blade.php --}}
@extends('layouts.app')

@section('title', $agenda->title . ' - SMP Islam Al-Azhar 17')

@push('styles')
<style>
  /* Container utama Hero */
  .hero-wrapper {
    position: relative;
    width: 100%;
    height: 500px;
    background-color: #000;
    overflow: hidden;
    border-radius: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Gambar Background yang di-Blur */
  .hero-blur-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(25px) brightness(0.7);
    transform: scale(1.1);
    z-index: 1;
  }

  /* Gambar Utama yang Tajam */
  .detail-hero-main {
    position: relative;
    z-index: 2;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
  }

  .detail-hero-placeholder {
    width: 100%;
    height: 280px;
    background: #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9ca3af;
    font-size: 14px;
    border-radius: 0;
  }

  .detail-wrap { max-width: 820px; margin: 0 auto; padding: 40px 16px 60px; }

  .detail-category { display: inline-block; background: #dcfce7; color: #15803d; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 4px 10px; border-radius: 20px; margin-bottom: 16px; }
  .detail-title { font-size: 28px; font-weight: 700; color: #111827; line-height: 1.35; margin: 0 0 12px; }
  .detail-meta { font-size: 13px; color: #9ca3af; margin-bottom: 28px; display: flex; align-items: center; gap: 16px; }
  .detail-meta span { display: flex; align-items: center; gap: 5px; }

  .divider { border: none; border-top: 1.5px solid #e5e7eb; margin: 0 0 28px; }

  .detail-body { font-size: 15px; color: #374151; line-height: 1.85; }
  .detail-body p { margin-bottom: 18px; }
  .detail-body h2 { font-size: 20px; font-weight: 700; color: #15803d; margin: 32px 0 12px; }
  .detail-body h3 { font-size: 17px; font-weight: 600; color: #111827; margin: 24px 0 10px; }
  .detail-body ul, .detail-body ol { padding-left: 22px; margin-bottom: 18px; }
  .detail-body li { margin-bottom: 6px; }
  .detail-body img { max-width: 100%; border-radius: 10px; margin: 20px 0; }
  .detail-body blockquote { border-left: 4px solid #15803d; padding: 10px 18px; background: #f0fdf4; border-radius: 0 8px 8px 0; font-style: italic; color: #4b5563; margin: 20px 0; }

  .btn-back { display: inline-flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 600; color: #15803d; text-decoration: none; border: 1.5px solid #15803d; padding: 7px 16px; border-radius: 6px; transition: background 0.2s, color 0.2s; margin-bottom: 32px; }
  .btn-back:hover { background: #15803d; color: #fff; }

  .lainnya-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 16px; margin-top: 12px; }
  .lainnya-card { text-decoration: none; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); background: #fff; transition: transform 0.2s, box-shadow 0.2s; display: block; }
  .lainnya-card:hover { transform: translateY(-3px); box-shadow: 0 6px 18px rgba(0,0,0,0.12); }
  .lainnya-card img { width: 100%; height: 110px; object-fit: cover; }
  .lainnya-card-placeholder { width: 100%; height: 110px; background: #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af; font-size: 12px; }
  .lainnya-card-body { padding: 10px 12px 12px; }
  .lainnya-card-title { font-size: 12px; font-weight: 600; color: #15803d; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
  .lainnya-card-date { font-size: 11px; color: #9ca3af; margin-top: 4px; }

  /* Responsif */
  @media (max-width: 640px) {
    .hero-wrapper {
      height: 350px;
    }
  }
</style>
@endpush

@section('content')

  {{-- HERO IMAGE DENGAN BLUR KIRI KANAN --}}
  @if ($agenda->image)
    <div class="hero-wrapper">
      <img src="{{ asset('storage/' . $agenda->image) }}" alt="background-blur" class="hero-blur-bg">
      <img src="{{ asset('storage/' . $agenda->image) }}" alt="{{ $agenda->title }}" class="detail-hero-main">
    </div>
  @else
    <div class="detail-hero-placeholder">Tidak ada gambar</div>
  @endif

  {{-- ARTICLE CONTENT --}}
  <div class="detail-wrap">

    <a href="{{ route('agenda.index') }}" class="btn-back">← Kembali ke Agenda</a>

    <div><span class="detail-category">Agenda</span></div>

    <h1 class="detail-title">{{ $agenda->title }}</h1>

    <div class="detail-meta">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        {{ \Carbon\Carbon::parse($agenda->agenda_date)->translatedFormat('d F Y') }}
      </span>
    </div>

    <hr class="divider">

    <div class="detail-body">
      {!! $agenda->content !!}
    </div>

    {{-- AGENDA LAINNYA --}}
    @if (isset($lainnya) && $lainnya->count())
    <div style="margin-top: 56px;">
      <h3 style="font-size:18px; font-weight:700; color:#111827; margin-bottom:16px; padding-bottom:10px; border-bottom:2px solid #dcfce7;">
        Agenda Lainnya
      </h3>
      <div class="lainnya-grid">
        @foreach ($lainnya as $other)
        <a href="{{ route('agenda.show', $other->id) }}" class="lainnya-card">
          @if ($other->image)
            <img src="{{ asset('storage/' . $other->image) }}" alt="{{ $other->title }}">
          @else
            <div class="lainnya-card-placeholder">No Image</div>
          @endif
          <div class="lainnya-card-body">
            <p class="lainnya-card-title">{{ $other->title }}</p>
            <p class="lainnya-card-date">{{ \Carbon\Carbon::parse($other->agenda_date)->translatedFormat('d F Y') }}</p>
          </div>
        </a>
        @endforeach
      </div>
    </div>
    @endif

  </div>

@endsection