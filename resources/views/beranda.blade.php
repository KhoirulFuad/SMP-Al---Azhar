{{-- resources/views/beranda.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda - SMP Islam Al-Azhar 17')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
<style>
  :root {
    --green-deep: #0a3d14;
    --green-main: #16a34a;
    --green-mid: #22c55e;
    --green-light: #bbf7d0;
    --gold: #fde047;
    --gold-dark: #ca8a04;
    --cream: #F9F6F0;
  }

  .deco {
    position: absolute;
    pointer-events: none;
    z-index: 0;
  }

  @keyframes floatUp {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-14px);
    }
  }

  @keyframes floatDown {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(14px);
    }
  }

  @keyframes pulseSoft {

    0%,
    100% {
      transform: scale(1);
      opacity: 0.7;
    }

    50% {
      transform: scale(1.08);
      opacity: 1;
    }
  }

  @keyframes drift {

    0%,
    100% {
      transform: translateX(0px) rotate(0deg);
    }

    33% {
      transform: translateX(8px) rotate(5deg);
    }

    66% {
      transform: translateX(-6px) rotate(-4deg);
    }
  }

  @keyframes tickerMove {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }

  @keyframes borderGlow {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }

    50% {
      box-shadow: 0 0 0 8px rgba(37, 211, 102, 0.2);
    }
  }

  /* ===== TICKER ===== */
  .ticker-wrap {
    background: var(--green-deep);
    overflow: hidden;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }

  .ticker-track {
    display: flex;
    width: max-content;
    animation: tickerMove 30s linear infinite;
  }

  .ticker-track:hover {
    animation-play-state: paused;
  }

  .ticker-item {
    white-space: nowrap;
    padding: 0 2.5rem;
    color: var(--green-light);
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 0.02em;
  }

  .ticker-item span {
    color: var(--gold);
    margin-right: 0.4rem;
  }

  /* ===== HERO ===== */
  .hero-image {
    width: 100%;
    height: 420px;
    object-fit: cover;
  }

  .hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.20);
    height: 420px;
  }

  @media (min-width: 768px) {
    .hero-image {
      height: 550px;
    }

    .hero-overlay {
      height: 550px;
    }
  }

  /* ===== SAMBUTAN CARD ===== */
  .sambutan-card {
    border-radius: 0.75rem;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    padding: 1.25rem;
    background-color: #F9F6F0;
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  .sambutan-top {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    text-align: center;
  }

  .sambutan-stats {
    display: flex;
    justify-content: center;
    gap: 2rem;
    border-top: 1px solid #e5e7eb;
    padding-top: 1rem;
  }

  @media (min-width: 768px) {
    .sambutan-card {
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      padding: 1.5rem;
      gap: 1.5rem;
    }

    .sambutan-top {
      flex-direction: row;
      text-align: left;
      align-items: flex-start;
    }

    .sambutan-stats {
      flex-direction: row;
      border-top: none;
      padding-top: 0;
      flex-shrink: 0;
      gap: 2rem;
      padding-right: 0.5rem;
    }
  }

  /* ===== SLIDER CARDS ===== */
  .agenda-card,
  .ekstra-card {
    flex-shrink: 0;
    min-width: calc(100% - 0px);
    max-width: calc(100% - 0px);
  }

  @media (min-width: 640px) {

    .agenda-card,
    .ekstra-card {
      min-width: calc((100% - 24px) / 2);
      max-width: calc((100% - 24px) / 2);
    }
  }

  @media (min-width: 1024px) {

    .agenda-card,
    .ekstra-card {
      min-width: calc((100% - 48px) / 3);
      max-width: calc((100% - 48px) / 3);
    }
  }

  /* ===== AGENDA CARD - zoom gambar saat hover ===== */
  .agenda-card {
    overflow: hidden;
    transition: transform 0.25s, box-shadow 0.25s;
  }

  .agenda-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(22, 163, 74, 0.15);
  }

  .agenda-card-img {
    position: relative;
    overflow: hidden;
  }

  .agenda-card-img img {
    transition: transform 0.5s;
    display: block;
  }

  .agenda-card:hover .agenda-card-img img {
    transform: scale(1.06);
  }

  /* ===== BERITA CARD - zoom gambar saat hover ===== */
  .berita-card-img {
    position: relative;
    overflow: hidden;
  }

  .berita-card-img img {
    transition: transform 0.5s;
    display: block;
  }

  .berita-card:hover .berita-card-img img {
    transform: scale(1.05);
  }

  .berita-card {
    transition: transform 0.25s, box-shadow 0.25s;
  }

  .berita-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.10);
  }

  /* ===== PRESTASI - ranking number kuning ===== */
  .prestasi-rank {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: var(--green-deep);
    font-size: 12px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  /* ===== MENGAPA CARD - garis gradien bawah saat hover ===== */
  .mengapa-card {
    position: relative;
    overflow: hidden;
    transition: transform 0.25s, box-shadow 0.25s;
  }

  .mengapa-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--green-main);
    /* ← ubah di sini */
    transform: scaleX(0);
    transition: transform 0.3s;
    transform-origin: left;
  }

  .mengapa-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 32px rgba(22, 163, 74, 0.12);
  }

  .mengapa-card:hover::after {
    transform: scaleX(1);
  }

  /* ===== EKSTRA CARD - hover ===== */
  .ekstra-card {
    transition: transform 0.25s, box-shadow 0.25s;
    overflow: hidden;
  }

  .ekstra-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 36px rgba(22, 163, 74, 0.15);
  }

  .ekstra-card-img {
    position: relative;
    overflow: hidden;
  }

  .ekstra-card-img img {
    transition: transform 0.5s;
    display: block;
  }

  .ekstra-card:hover .ekstra-card-img img {
    transform: scale(1.08);
  }

  /* ===== PMB - khusus dari script 1 ===== */
  .pmb-section {
    background: linear-gradient(135deg, var(--green-deep) 0%, #0f5c22 50%, #164e2a 100%);
    position: relative;
    overflow: hidden;
  }

  .pmb-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }

  .pmb-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--gold);
    color: var(--green-deep);
    font-weight: 700;
    font-size: 14px;
    padding: 12px 28px;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.2s;
    box-shadow: 0 4px 20px rgba(253, 224, 71, 0.35);
  }

  .pmb-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(253, 224, 71, 0.5);
  }

  .pmb-btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    color: #fff;
    font-weight: 600;
    font-size: 14px;
    padding: 12px 24px;
    border-radius: 10px;
    border: 1.5px solid rgba(255, 255, 255, 0.35);
    text-decoration: none;
    backdrop-filter: blur(6px);
    transition: all 0.2s;
  }

  .pmb-btn-ghost:hover {
    background: rgba(255, 255, 255, 0.22);
  }

  .pmb-video {
    display: none;
  }

  @media (min-width: 640px) {
    .pmb-video {
      display: block;
    }
  }

  /* ===== WA FLOAT ===== */
  .wa-float {
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 999;
    width: 56px;
    height: 56px;
    background: #25d366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 24px rgba(37, 211, 102, 0.45);
    text-decoration: none;
    transition: all 0.2s;
    animation: borderGlow 3s ease-in-out infinite;
  }

  .wa-float:hover {
    transform: scale(1.12);
    box-shadow: 0 10px 32px rgba(37, 211, 102, 0.55);
  }

  .wa-float svg {
    width: 28px;
    height: 28px;
    fill: #fff;
  }

  /* ===== PRESTASI ===== */
  .prestasi-ilustrasi {
    display: none;
  }

  @media (min-width: 768px) {
    .prestasi-ilustrasi {
      display: flex;
    }
  }

  /* ===== PMB images (old) ===== */
  .pmb-images {
    display: none;
  }

  @media (min-width: 640px) {
    .pmb-images {
      display: flex;
    }
  }

  /* ===== MENGAPA GRID ===== */
  .mengapa-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
  }

  @media (min-width: 640px) {
    .mengapa-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (min-width: 1024px) {
    .mengapa-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  /* ===== BERITA GRID ===== */
  .berita-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }

  @media (min-width: 640px) {
    .berita-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (min-width: 1024px) {
    .berita-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  /* ===== SLIDER VISIBLE COUNT ===== */
  .slider-visible-count::before {
    content: '1';
  }

  @media (min-width: 640px) {
    .slider-visible-count::before {
      content: '2';
    }
  }

  @media (min-width: 1024px) {
    .slider-visible-count::before {
      content: '3';
    }
  }

  /* ===== PRESTASI ITEM hover ===== */
  .prestasi-item {
    display: flex;
    gap: 1rem;
    align-items: center;
    background: #fff;
    border-radius: 14px;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid rgba(0, 0, 0, 0.05);
    text-decoration: none;
    color: inherit;
    transition: transform 0.22s, box-shadow 0.22s, border-color 0.22s;
  }

  .prestasi-item:hover {
    transform: translateX(6px);
    box-shadow: 0 8px 24px rgba(22, 163, 74, 0.12);
    border-color: rgba(22, 163, 74, 0.2);
  }
</style>
@endpush

@section('content')

{{-- ===== TICKER ===== --}}
<div class="ticker-wrap">
  <div class="ticker-track">
    @php
    $ticks = [
    'Selamat Datang di SMP Islam Al-Azhar 17 Pontianak',
    'Sekolah Terakreditasi A',
    'Membentuk Generasi Berilmu & Berakhlak',
    'Pendaftaran SPMB Dibuka — Daftar Sekarang!',
    'Raih Prestasi Terbaik Bersama Kami',
    ];
    @endphp
    @foreach(array_merge($ticks, $ticks) as $tick)
    <span class="ticker-item"><span>✦</span>{{ $tick }}</span>
    @endforeach
  </div>
</div>


{{-- ===== HERO + AGENDA + PRESTASI + BERITA + MENGAPA + EKSTRAKULIKULER — SATU SECTION ===== --}}
<section class="relative overflow-hidden" style="background-color:#F9F6F0;">

  {{-- ══════════════════════════════════════════
       LAYER 1: Dot-grid diagonal — mengisi seluruh section dari hero sampai ekstra
  ══════════════════════════════════════════ --}}
  <svg class="absolute inset-0 w-full h-full z-0" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="dotGridMain" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
        <circle cx="14" cy="14" r="1.4" fill="#16a34a" opacity="0.17" />
      </pattern>
      <pattern id="diamondAccentMain" x="0" y="0" width="112" height="112" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
        <rect x="50" y="50" width="12" height="12" rx="2" fill="none" stroke="#ca8a04" stroke-width="0.6" opacity="0.11" transform="rotate(45 56 56)" />
      </pattern>
      <pattern id="diagLinesMain" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
        <line x1="0" y1="80" x2="80" y2="0" stroke="#16a34a" stroke-width="0.4" opacity="0.06" />
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#dotGridMain)" />
    <rect width="100%" height="100%" fill="url(#diamondAccentMain)" />
    <rect width="100%" height="100%" fill="url(#diagLinesMain)" />
  </svg>

  {{-- ══════════════════════════════════════════
       LAYER 2: Blur ambient — tersebar di seluruh section
  ══════════════════════════════════════════ --}}
  <div class="absolute inset-0 z-0 pointer-events-none">
    <div class="absolute top-[-100px] left-[-80px] w-[420px] h-[420px] rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(22,163,74,0.10) 0%, transparent 65%);"></div>
    <div class="absolute top-[-20px] right-[-60px] w-[300px] h-[300px] rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(202,138,4,0.08) 0%, transparent 65%);"></div>
    <div class="absolute bottom-[-100px] right-[-80px] w-[380px] h-[380px] rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(202,138,4,0.09) 0%, transparent 65%);"></div>
    <div class="absolute bottom-[-60px] left-[-60px] w-[280px] h-[280px] rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(22,163,74,0.07) 0%, transparent 65%);"></div>
    <div class="absolute left-1/2 top-1/3 -translate-x-1/2 w-[700px] h-[700px] rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(22,163,74,0.04) 0%, transparent 60%);"></div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 1: HERO
  ══════════════════════════════════════════════════════════════ --}}

  {{-- Deco floating di area hero --}}
  <div class="deco hidden sm:block" style="top:-40px;left:-40px;animation:pulseSoft 10s ease-in-out infinite;z-index:1;"><svg width="240" height="240">
      <circle cx="120" cy="120" r="120" fill="#16a34a" opacity="0.07" />
    </svg></div>
  <div class="deco hidden sm:block" style="top:20px;left:60px;animation:floatUp 7s ease-in-out infinite 0.5s;z-index:1;"><svg width="24" height="24">
      <rect width="24" height="24" rx="4" fill="#16a34a" opacity="0.13" transform="rotate(25 12 12)" />
    </svg></div>
  <div class="deco hidden sm:block" style="top:90px;left:25px;animation:floatDown 8s ease-in-out infinite 1s;z-index:1;"><svg width="14" height="14">
      <circle cx="7" cy="7" r="7" fill="#ca8a04" opacity="0.18" />
    </svg></div>
  <div class="deco hidden sm:block" style="top:-20px;right:-20px;animation:pulseSoft 12s ease-in-out infinite 1s;z-index:1;"><svg width="200" height="200">
      <circle cx="100" cy="100" r="100" fill="#ca8a04" opacity="0.05" />
    </svg></div>
  <div class="deco hidden sm:block" style="top:30px;right:60px;animation:floatDown 9s ease-in-out infinite 0.5s;z-index:1;"><svg width="30" height="30">
      <rect width="30" height="30" rx="5" fill="#ca8a04" opacity="0.11" transform="rotate(20 15 15)" />
    </svg></div>

  {{-- Gambar hero + overlay + teks --}}
  <div class="relative z-10">
    <img src="{{ asset('storage/beranda/gedungsmp2.png') }}"
      class="hero-image w-full object-cover"
      alt="Depan Sekolah"
      data-aos="zoom-in"
      data-aos-duration="1200"
      data-aos-once="true"
      data-aos-offset="0">

    <div class="hero-overlay"
      style="background: linear-gradient(to bottom, rgba(10,61,20,0.55) 0%, rgba(10,61,20,0.35) 50%, rgba(0,0,0,0.55) 100%);"
      data-aos="fade-down"
      data-aos-duration="1000"
      data-aos-once="true"
      data-aos-offset="0"></div>

    <div class="absolute flex items-center justify-center z-10 px-4 text-center"
      style="top:0; left:0; right:0; height:420px;">
      <h1 class="text-white font-bold drop-shadow-lg"
        style="font-size: clamp(2rem, 5vw, 3.75rem); text-shadow: 0 4px 24px rgba(0,0,0,0.5);"
        data-aos="fade-up"
        data-aos-delay="400"
        data-aos-duration="800"
        data-aos-once="true"
        data-aos-offset="0">
        Selamat Datang di<br>
        <span style="color:#fde047;">SMP Islam Al-Azhar 17</span>
      </h1>
    </div>
  </div>

  {{-- Sambutan Card --}}
  <div class="relative z-10 max-w-4xl mx-auto px-4" style="margin-top: -5rem; padding-bottom: 3rem;">
    <div class="sambutan-card"
      data-aos="fade-up"
      data-aos-delay="600"
      data-aos-duration="700"
      data-aos-once="true"
      data-aos-offset="0">

      <div class="sambutan-top flex-1">
        <img src="{{ $principal && $principal->image ? asset('storage/'.$principal->image) : asset('storage/kepsek.jpg') }}"
          class="w-28 h-28 md:w-36 md:h-36 rounded-full object-cover flex-shrink-0"
          alt="Foto Kepala Sekolah"
          data-aos="zoom-in"
          data-aos-delay="800"
          data-aos-duration="600"
          data-aos-once="true"
          data-aos-offset="0">
        <div data-aos="fade-left"
          data-aos-delay="900"
          data-aos-duration="600"
          data-aos-once="true"
          data-aos-offset="0">
          <h3 class="font-bold text-base md:text-lg leading-tight">Sambutan Kepala Sekolah</h3>
          <p class="font-semibold text-sm mt-0.5">{{ optional($principal)->name ?? '-' }}</p>
          <p class="text-sm text-gray-500 mt-1 leading-relaxed max-w-xs">
            {!! $principal ? Str::limit(strip_tags($principal->message), 120) : 'Pesan belum tersedia.' !!}
          </p>
          <a href="{{ route('sambutan') }}" class="text-sm text-gray-600 mt-2 inline-block hover:text-green-700">
            Selengkapnya &rsaquo;
          </a>
        </div>
      </div>

      <div class="sambutan-stats flex items-center justify-center gap-4 md:gap-8"
        data-aos="fade-left"
        data-aos-delay="1000"
        data-aos-duration="600"
        data-aos-once="true"
        data-aos-offset="0">

        <div class="flex flex-col items-center text-center min-w-[90px] md:min-w-[110px]">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 md:w-8 md:h-8 text-gray-700 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0121 17.25c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 013 17.25c0-2.042.897-3.878 2.34-5.172L12 14z" />
          </svg>
          <span class="text-xl md:text-2xl font-bold text-gray-800 counter" data-target="{{ optional($principal)->total_students ?? 0 }}">0</span>
          <span class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wide font-medium">Siswa Aktif</span>
        </div>

        <div class="h-10 w-[1px] bg-gray-200 hidden md:block"></div>

        <div class="flex flex-col items-center text-center min-w-[90px] md:min-w-[110px]">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 md:w-8 md:h-8 text-gray-700 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
          </svg>
          <span class="text-xl md:text-2xl font-bold text-gray-800 counter" data-target="{{ optional($principal)->total_staff ?? 0 }}">0</span>
          <span class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wide font-medium">Guru & Staff</span>
        </div>
      </div>

    </div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 2: AGENDA SEKOLAH
  ══════════════════════════════════════════════════════════════ --}}
  <div class="text-center pt-10 md:pt-16 pb-10 md:pb-16 text-gray-800 relative z-10">

    <h2 class="text-2xl md:text-3xl font-bold mb-8 md:mb-10 px-4" data-aos="fade-down">Agenda Sekolah</h2>

    <div class="relative max-w-6xl mx-auto px-4 md:px-12">
      <button onclick="slideAgenda(-1)" class="absolute left-0 md:left-[-20px] top-1/2 -translate-y-1/2 z-10 bg-green-700 text-white rounded-full w-9 h-9 md:w-10 md:h-10 flex items-center justify-center shadow-lg hover:bg-green-800 transition text-2xl md:text-3xl font-bold" style="margin-top:-2rem;">&#8249;</button>
      <button onclick="slideAgenda(1)" class="absolute right-0 md:right-[-20px] top-1/2 -translate-y-1/2 z-10 bg-green-700 text-white rounded-full w-9 h-9 md:w-10 md:h-10 flex items-center justify-center shadow-lg hover:bg-green-800 transition text-2xl md:text-3xl font-bold" style="margin-top:-2rem;">&#8250;</button>

      <div class="overflow-hidden mx-8 md:mx-0">
        <div id="agendaTrack" class="flex" style="gap:24px;">
          @forelse ($agendas as $agenda)
          <div class="agenda-card rounded-xl text-left flex-shrink-0 border border-gray-200"
            data-aos="fade-up"
            data-aos-delay="{{ $loop->index * 100 }}"
            style="background-color:#ffffff;">
            <div class="agenda-card-img">
              <img src="{{ $agenda->image ? asset('storage/'.$agenda->image) : asset('storage/default-agenda.jpg') }}"
                class="w-full h-44 md:h-52 object-cover" alt="{{ $agenda->title }}">
            </div>
            <div class="p-4 md:p-5">
              <p class="text-xs md:text-sm text-gray-500 mb-2">{{ \Carbon\Carbon::parse($agenda->agenda_date)->translatedFormat('d F Y') }}</p>
              <h3 class="text-base md:text-xl font-bold mb-2 text-gray-800">{{ $agenda->title }}</h3>
              <p class="text-gray-600 text-xs md:text-sm">{{ Str::limit(strip_tags($agenda->content), 100) }}</p>
              <a href="{{ route('agenda.show', $agenda->id) }}" class="inline-block mt-3 md:mt-4 bg-green-600 text-white px-4 py-1.5 md:px-5 md:py-2 rounded-full text-sm hover:bg-green-700">Selengkapnya &rsaquo;</a>
            </div>
          </div>
          @empty
          <div class="text-gray-600 text-center w-full py-10">Belum ada agenda sekolah.</div>
          @endforelse
        </div>
      </div>

      <div class="flex justify-center mt-6 md:mt-8" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('agenda.index') }}" class="border-2 border-green-600 text-green-700 font-semibold px-8 md:px-10 py-2 md:py-2.5 rounded-lg hover:bg-green-600 hover:text-white flex items-center gap-2 text-sm md:text-base transition-colors">
          Lihat Selengkapnya &rsaquo;
        </a>
      </div>
    </div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 3: PRESTASI
  ══════════════════════════════════════════════════════════════ --}}
  <div class="py-8 md:py-10 relative z-10">
    <div class="max-w-6xl mx-auto px-4 flex gap-8 items-start">

      <div class="flex-1 min-w-0">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8 text-center md:text-right" data-aos="fade-right">Prestasi Kami</h2>

        @forelse ($achievements as $achievement)
        <a href="{{ route('prestasi.show', $achievement->id) }}"
          class="prestasi-item"
          data-aos="fade-up"
          data-aos-delay="{{ $loop->index * 100 }}">
          <div class="prestasi-rank">{{ $loop->iteration }}</div>
          <img src="{{ $achievement->image ? asset('storage/'.$achievement->image) : asset('storage/default-achievement.jpg') }}"
            class="w-24 h-20 sm:w-32 sm:h-24 md:w-[140px] md:h-[100px] rounded-lg object-cover flex-shrink-0"
            alt="{{ $achievement->title }}">
          <div class="min-w-0">
            <p class="text-xs text-gray-400 mb-1">{{ \Carbon\Carbon::parse($achievement->achievement_date)->translatedFormat('d F Y') }}</p>
            <h4 class="font-semibold text-gray-800 mb-1 text-sm md:text-base group-hover:text-green-700 transition-colors duration-200 line-clamp-2">{{ $achievement->title }}</h4>
            <p class="text-gray-600 text-xs md:text-sm leading-relaxed line-clamp-2 md:line-clamp-3">{{ Str::limit(strip_tags($achievement->content), 120) }}</p>
          </div>
        </a>
        @empty
        <div class="text-gray-500 text-sm text-center py-6">Belum ada prestasi.</div>
        @endforelse

        <div class="flex justify-center mt-6 md:mt-8" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('prestasi.index') }}" class="border-2 border-green-600 text-green-700 font-semibold px-7 md:px-8 py-2 rounded-lg hover:bg-green-600 hover:text-white transition-colors flex items-center gap-2 text-sm md:text-base">
            Lihat Selengkapnya &rsaquo;
          </a>
        </div>
      </div>

      {{-- Ilustrasi siswa (sembunyikan di mobile) --}}
      <div class="prestasi-ilustrasi relative w-[420px] h-[500px] flex-shrink-0 items-center justify-center"
        data-aos="fade-left" data-aos-delay="200">
        <div class="absolute z-0 rounded-full"
          style="width:320px;height:320px;bottom:20px;left:50%;transform:translateX(-50%);
                    background: conic-gradient(from 120deg, #15803d, #16a34a, #22c55e, #bbf7d0, #fde68a, #f59e0b, #15803d);
                    opacity:0.18; filter:blur(2px);"></div>
        <div class="absolute z-0 rounded-full"
          style="width:260px;height:260px;bottom:40px;left:50%;transform:translateX(-50%);
                    background: radial-gradient(circle at 45% 35%, #4ade80, #16a34a 40%, #14532d);
                    box-shadow: 0 0 40px rgba(34,197,94,0.3), inset 0 0 60px rgba(20,83,45,0.4);"></div>
        <div class="absolute z-0 rounded-full pointer-events-none"
          style="width:260px;height:260px;bottom:40px;left:50%;transform:translateX(-50%);
                    background: radial-gradient(circle at 45% 35%, rgba(134,239,172,0.55), transparent 60%);"></div>
        <div class="absolute z-0 rounded-full"
          style="width:130px;height:130px;bottom:10px;right:20px;
                    background: radial-gradient(circle at 40% 40%, #fef08a, #d97706);
                    opacity:0.9;"></div>
        <div class="absolute z-0 rounded-full"
          style="width:70px;height:70px;top:40px;left:30px;
                    background: radial-gradient(circle, #fde68a, #f59e0b);
                    opacity:0.7;"></div>
        <div class="absolute top-6 right-4 z-0" style="display:grid;grid-template-columns:repeat(5,1fr);gap:6px;">
          @for ($i = 0; $i < 20; $i++)
            <div style="width:5px;height:5px;border-radius:50%;background:#16a34a;opacity:0.35;">
        </div>
        @endfor
      </div>
      <div class="absolute z-0" style="top:30px;right:60px;font-size:18px;opacity:0.5;animation:floatUp 4s ease-in-out infinite;">✦</div>
      <div class="absolute z-0" style="bottom:60px;right:10px;font-size:10px;color:#f59e0b;opacity:0.6;animation:floatUp 6s ease-in-out infinite 0.5s;">★</div>
      <div class="absolute z-0 rounded-full"
        style="width:180px;height:180px;bottom:60px;left:50%;transform:translateX(-50%);
                    background:radial-gradient(circle, rgba(34,197,94,0.35), transparent);
                    filter:blur(30px);"></div>
      <img src="{{ asset('storage/beranda/backgroundsiswa2.png') }}"
        class="absolute z-20"
        style="height:420px; width:auto; object-fit:contain; bottom:30px; right:-24px;
                    filter: drop-shadow(0 16px 32px rgba(0,0,0,0.3));"
        alt="Siswa">
    </div>

  </div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 4: BERITA TERKINI
  ══════════════════════════════════════════════════════════════ --}}
  <div class="py-10 md:py-16 relative z-10">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8 text-gray-800 text-center" data-aos="fade-down">Berita Terkini</h2>

      <div class="berita-grid">
        @forelse ($news as $item)
        <div class="berita-card bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm"
          data-aos="fade-up"
          data-aos-delay="{{ $loop->index * 100 }}">
          <div class="berita-card-img">
            <img src="{{ $item->image ? asset('storage/'.$item->image) : asset('storage/default-news.jpg') }}"
              class="w-full h-44 md:h-48 object-cover" alt="{{ $item->title }}">
          </div>
          <div class="p-4">
            <p class="text-xs text-gray-400 mb-1">{{ \Carbon\Carbon::parse($item->news_date)->translatedFormat('d F Y') }}</p>
            <h4 class="font-bold text-gray-800 mb-2 text-sm md:text-base line-clamp-2">{{ $item->title }}</h4>
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ Str::limit(strip_tags($item->content), 100) }}</p>
            <a href="{{ route('berita.show', $item->slug) }}" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">
              Selengkapnya &rsaquo;
            </a>
          </div>
        </div>
        @empty
        <div class="col-span-3 text-center text-gray-500 py-10">Belum ada berita.</div>
        @endforelse
      </div>

      <div class="flex justify-center mt-8 md:mt-10" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('berita.index') }}" class="border-2 border-green-600 text-green-700 font-semibold px-8 md:px-10 py-2 md:py-2.5 rounded-lg hover:bg-green-600 hover:text-white flex items-center gap-2 text-sm md:text-base transition-colors">
          Lihat Selengkapnya &rsaquo;
        </a>
      </div>
    </div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 5: MENGAPA MEMILIH AL AZHAR
  ══════════════════════════════════════════════════════════════ --}}
  <div class="py-10 md:py-16 relative z-10">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-2xl md:text-4xl font-bold text-center text-gray-900 mb-8 md:mb-10" data-aos="fade-down">Mengapa Memilih Al Azhar?</h2>

      <div class="mengapa-grid">

        <div class="mengapa-card bg-white rounded-xl p-5 md:p-6 shadow-sm border border-gray-100"
          data-aos="zoom-in" data-aos-delay="0">
          <div class="mb-3 md:mb-4"><svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-10 md:h-10 text-gray-800" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path d="M12 14l6.16-3.422A12.083 12.083 0 0121 17.25c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 013 17.25c0-2.042.897-3.878 2.34-5.172L12 14z" />
            </svg></div>
          <h4 class="font-bold text-gray-900 text-base md:text-lg mb-2">Telah Terakreditasi A</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Sekolah dengan Akreditasi A yang menjamin kualitas pendidikan dan sistem pembelajaran yang unggul.</p>
        </div>

        <div class="mengapa-card bg-white rounded-xl p-5 md:p-6 shadow-sm border border-gray-100"
          data-aos="zoom-in" data-aos-delay="100">
          <div class="mb-3 md:mb-4"><span class="text-3xl">📘</span></div>
          <h4 class="font-bold text-gray-900 text-base md:text-lg mb-2">Terintegrasi Kurikulum Al Azhar dan Kurikulum Nasional</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Sekolah dengan Akreditasi A yang menjamin kualitas pendidikan dan sistem pembelajaran yang unggul.</p>
        </div>

        <div class="mengapa-card bg-white rounded-xl p-5 md:p-6 shadow-sm border border-gray-100"
          data-aos="zoom-in" data-aos-delay="200">
          <div class="mb-3 md:mb-4"><span class="text-3xl md:text-4xl">⭐</span></div>
          <h4 class="font-bold text-gray-900 text-base md:text-lg mb-2">Layanan Prima</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Memberikan pelayanan pendidikan yang profesional, ramah, dan responsif.</p>
        </div>

        <div class="mengapa-card bg-white rounded-xl p-5 md:p-6 shadow-sm border border-gray-100"
          data-aos="zoom-in" data-aos-delay="300">
          <div class="mb-3 md:mb-4"><span class="text-3xl md:text-4xl">👨‍👩‍👧</span></div>
          <h4 class="font-bold text-gray-900 text-base md:text-lg mb-2">Pendidikan Kompeten</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Didukung tenaga pendidik berpengalaman dan kompeten.</p>
        </div>

        <div class="mengapa-card bg-white rounded-xl p-5 md:p-6 shadow-sm border border-gray-100"
          data-aos="zoom-in" data-aos-delay="400">
          <div class="mb-3 md:mb-4"><span class="text-3xl md:text-4xl">📍</span></div>
          <h4 class="font-bold text-gray-900 text-base md:text-lg mb-2">Lokasi Strategis</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Berlokasi strategis sehingga mudah dijangkau oleh siswa dan orang tua.</p>
        </div>

        <div class="mengapa-card bg-white rounded-xl p-5 md:p-6 shadow-sm border border-gray-100"
          data-aos="zoom-in" data-aos-delay="500">
          <div class="mb-3 md:mb-4"><span class="text-3xl md:text-4xl">🏆</span></div>
          <h4 class="font-bold text-gray-900 text-base md:text-lg mb-2">Beasiswa Prestasi</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Tersedia program beasiswa bagi siswa berprestasi.</p>
        </div>

      </div>
    </div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 6: EKSTRAKULIKULER
  ══════════════════════════════════════════════════════════════ --}}
  <div class="py-10 md:py-16 relative z-10">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-6 md:mb-8" data-aos="fade-down">Ekstrakulikuler Kami</h2>

      <div class="relative">
        <div style="overflow: hidden; padding: 8px 4px 20px; margin: -8px -4px -20px;">
          <div id="ekstraTrack" class="flex select-none" style="gap:24px; cursor:grab;">
            @forelse ($extracurriculars as $ekstra)
            <div class="ekstra-card flex-shrink-0 rounded-2xl border border-gray-100 shadow-md bg-white"
              data-aos="fade-up"
              data-aos-delay="{{ $loop->index * 100 }}">
              <div class="ekstra-card-img">
                <img src="{{ $ekstra->image ? asset('storage/'.$ekstra->image) : asset('storage/default-ekstra.jpg') }}"
                  class="w-full h-44 md:h-52 object-cover" alt="{{ $ekstra->name }}">
              </div>
              <div class="bg-white py-3 text-center">
                <p class="font-bold text-green-700 text-sm md:text-base">{{ $ekstra->name }}</p>
              </div>
            </div>
            @empty
            <div class="text-gray-500 text-center w-full py-10">Belum ada ekstrakulikuler.</div>
            @endforelse
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

{{-- ===== PMB (SPMB) — menggunakan desain dari script 1 ===== --}}
<section class="pmb-section py-10 md:py-16">
  <div class="deco hidden sm:block" style="top:-50px;left:-50px;animation:pulseSoft 10s ease-in-out infinite;"><svg width="260" height="260">
      <circle cx="130" cy="130" r="130" fill="#ffffff" opacity="0.04" />
    </svg></div>
  <div class="deco hidden sm:block" style="top:-30px;right:-30px;animation:pulseSoft 9s ease-in-out infinite 1.5s;"><svg width="200" height="200">
      <circle cx="100" cy="100" r="100" fill="#ffffff" opacity="0.03" />
    </svg></div>

  <div class="max-w-6xl mx-auto px-4 md:px-6 flex flex-col md:flex-row items-center justify-between gap-10 relative z-10">

    <div class="flex-1 max-w-lg text-left" data-aos="fade-right">
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.75rem,4vw,3rem);font-weight:800;color:#fff;line-height:1.2;margin-bottom:1rem;">
        Sistem Penerimaan<br>Murid Baru <em style="color:var(--gold);font-style:normal;">(SPMB)</em>
      </h2>
      <p style="color:rgba(255,255,255,0.8);font-size:15px;line-height:1.75;margin-bottom:2rem;">
        Bersama kami, setiap langkah adalah awal dari masa depan yang cerah.
        Ayo bergabung dan raih prestasi terbaikmu di SMP Islam Al-Azhar 17 Pontianak!
      </p>
      <a href="https://pmb.alazharpontianak.id/" target="_blank" class="pmb-btn-primary">
        Daftar Sekarang
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>
      </a>
    </div>

    <div class="pmb-video flex-shrink-0" data-aos="fade-left" data-aos-delay="150">
      <div class="rounded-2xl overflow-hidden shadow-2xl"
        style="width:480px;height:280px;border:3px solid rgba(255,255,255,0.2);margin-right:-4rem;">
        <iframe
          src="https://www.youtube.com/embed/iBlTtj9pNR4?autoplay=1&mute=1&loop=1&playlist=iBlTtj9pNR4&controls=0&rel=0"
          style="border:0;width:100%;height:100%;"
          allow="autoplay; encrypted-media"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>

  </div>
</section>

{{-- ===== MITRA & JARINGAN + INSTAGRAM — SATU SECTION BACKGROUND ===== --}}
<section class="relative overflow-hidden" style="background-color: #F9F6F0;">

  {{-- ══════════════════════════════════════════
       LAYER 1: Islamic Pattern — mengisi seluruh section
  ══════════════════════════════════════════ --}}
  <svg class="absolute inset-0 w-full h-full z-0" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="islamicTileMerged" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
        <g fill="none" stroke="#16a34a" stroke-width="0.6" opacity="0.18">
          <polygon points="40,4 52,15 64,4 64,20 76,20 65,30 76,40 64,40 64,56 52,45 40,56 28,45 16,56 16,40 4,40 15,30 4,20 16,20 16,4 28,15" />
          <line x1="40" y1="4" x2="40" y2="56" />
          <line x1="4" y1="30" x2="76" y2="30" />
          <line x1="16" y1="4" x2="64" y2="56" />
          <line x1="64" y1="4" x2="16" y2="56" />
        </g>
        <g fill="none" stroke="#ca8a04" stroke-width="0.4" opacity="0.10">
          <circle cx="40" cy="30" r="10" />
          <circle cx="40" cy="30" r="18" />
        </g>
        <g fill="#16a34a" opacity="0.12">
          <circle cx="0" cy="0" r="1.5" />
          <circle cx="80" cy="0" r="1.5" />
          <circle cx="0" cy="80" r="1.5" />
          <circle cx="80" cy="80" r="1.5" />
          <circle cx="40" cy="40" r="2" />
        </g>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#islamicTileMerged)" />
  </svg>

  {{-- ══════════════════════════════════════════
       LAYER 2: Aksen bintang sudut
  ══════════════════════════════════════════ --}}
  <svg class="absolute inset-0 w-full h-full z-0 pointer-events-none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    {{-- Kiri atas --}}
    <g transform="translate(28, 28) scale(0.9)" fill="#ca8a04" opacity="0.25">
      <polygon points="16,0 19.5,10.5 30,10.5 21.5,17 25,27.5 16,21 7,27.5 10.5,17 2,10.5 12.5,10.5" />
    </g>
    <g transform="translate(68, 14) scale(0.55)" fill="#16a34a" opacity="0.18">
      <polygon points="16,0 19.5,10.5 30,10.5 21.5,17 25,27.5 16,21 7,27.5 10.5,17 2,10.5 12.5,10.5" />
    </g>
    {{-- Kanan atas --}}
    <g transform="translate(calc(100% - 52px), 14) scale(0.75)" fill="#ca8a04" opacity="0.20">
      <polygon points="16,0 19.5,10.5 30,10.5 21.5,17 25,27.5 16,21 7,27.5 10.5,17 2,10.5 12.5,10.5" />
    </g>
    {{-- Kiri bawah --}}
    <g transform="translate(20, calc(100% - 52px)) scale(0.7)" fill="#16a34a" opacity="0.18">
      <polygon points="16,0 19.5,10.5 30,10.5 21.5,17 25,27.5 16,21 7,27.5 10.5,17 2,10.5 12.5,10.5" />
    </g>
    {{-- Kanan bawah --}}
    <g transform="translate(calc(100% - 58px), calc(100% - 46px)) scale(0.8)" fill="#ca8a04" opacity="0.22">
      <polygon points="16,0 19.5,10.5 30,10.5 21.5,17 25,27.5 16,21 7,27.5 10.5,17 2,10.5 12.5,10.5" />
    </g>
  </svg>

  {{-- ══════════════════════════════════════════
       LAYER 3: Blur radial di sudut-sudut
  ══════════════════════════════════════════ --}}
  <div class="absolute inset-0 z-0 pointer-events-none">
    <div class="absolute top-[-80px] left-[-80px] w-96 h-96 rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(22,163,74,0.16) 0%, transparent 70%);"></div>
    <div class="absolute bottom-[-60px] right-[-60px] w-80 h-80 rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(202,138,4,0.14) 0%, transparent 70%);"></div>
    <div class="absolute top-1/2 left-[-40px] w-56 h-56 rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(22,163,74,0.08) 0%, transparent 70%); transform: translateY(-50%);"></div>
    <div class="absolute top-1/2 right-[-40px] w-56 h-56 rounded-full blur-3xl"
      style="background: radial-gradient(circle, rgba(202,138,4,0.08) 0%, transparent 70%); transform: translateY(-50%);"></div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 1: MITRA & JARINGAN
  ══════════════════════════════════════════════════════════════ --}}
  <div class="py-10 md:py-16 max-w-6xl mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-14 items-start">

      {{-- ===== KIRI: UNIT & NAUNGAN ===== --}}
      <div data-aos="fade-right">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Unit &amp; Naungan</h2>

        {{-- Baris 1: 2 card --}}
        <div class="grid grid-cols-2 gap-2.5 mb-2.5">
          <a href="https://alazharpontianak.org/profil/" target="_blank"
            class="flex flex-col items-center justify-center gap-2 rounded-xl border hover:border-green-300 hover:-translate-y-1 hover:shadow-md transition-all duration-200 p-3 min-h-[90px]"
            style="background: rgba(255,255,255,0.88); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border-color: rgba(229,231,235,1);"
            data-aos="zoom-in" data-aos-delay="0">
            <img src="{{ asset('storage/beranda/logoykik.png') }}" class="w-14 h-14 object-contain" alt="YKIK">
            <span class="text-[10px] font-semibold text-gray-600 text-center leading-tight">Naungan YKIK</span>
          </a>
          <a href="https://alazharpontianak.org/unit/kb-tkia-21/" target="_blank"
            class="flex flex-col items-center justify-center gap-2 rounded-xl border hover:border-green-300 hover:-translate-y-1 hover:shadow-md transition-all duration-200 p-3 min-h-[90px]"
            style="background: rgba(255,255,255,0.88); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border-color: rgba(229,231,235,1);"
            data-aos="zoom-in" data-aos-delay="60">
            <img src="{{ asset('storage/beranda/logotk.png') }}" class="w-14 h-14 object-contain" alt="KB/TK Islam Al-Azhar 21">
            <span class="text-[10px] font-semibold text-gray-600 text-center leading-tight">KB/TK Islam Al-Azhar 21</span>
          </a>
        </div>

        {{-- Baris 2: 2 card --}}
        <div class="grid grid-cols-2 gap-2.5 mb-2.5">
          <a href="https://alazharpontianak.org/unit/sdia-21/#" target="_blank"
            class="flex flex-col items-center justify-center gap-2 rounded-xl border hover:border-green-300 hover:-translate-y-1 hover:shadow-md transition-all duration-200 p-3 min-h-[90px]"
            style="background: rgba(255,255,255,0.88); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border-color: rgba(229,231,235,1);"
            data-aos="zoom-in" data-aos-delay="120">
            <img src="{{ asset('storage/beranda/logosd.png') }}" class="w-14 h-14 object-contain" alt="SD Islam Al-Azhar 21">
            <span class="text-[10px] font-semibold text-gray-600 text-center leading-tight">SD Islam Al-Azhar 21</span>
          </a>
          <a href="https://smaialazhar10.sch.id/" target="_blank"
            class="flex flex-col items-center justify-center gap-2 rounded-xl border hover:border-green-300 hover:-translate-y-1 hover:shadow-md transition-all duration-200 p-3 min-h-[90px]"
            style="background: rgba(255,255,255,0.88); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border-color: rgba(229,231,235,1);"
            data-aos="zoom-in" data-aos-delay="180">
            <img src="{{ asset('storage/beranda/logosma.png') }}" class="w-14 h-14 object-contain" alt="SMA Islam Al-Azhar 10">
            <span class="text-[10px] font-semibold text-gray-600 text-center leading-tight">SMA Islam Al-Azhar 10</span>
          </a>
        </div>

        {{-- Baris 3: SMP 17 center --}}
        <div class="flex justify-center">
          <a href="{{ route('profil') }}"
            class="flex flex-col items-center justify-center gap-2 rounded-xl hover:-translate-y-1 hover:shadow-md transition-all duration-200 p-3 min-h-[90px]"
            style="width: calc(50% - 5px); background: rgba(255,255,255,0.92); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 2px solid #4ade80; box-shadow: 0 0 0 3px rgba(74,222,128,0.12);"
            data-aos="zoom-in" data-aos-delay="240">
            <img src="{{ asset('storage/navbarfooter/logosmp.png') }}" class="w-14 h-14 object-contain" alt="SMP Islam Al-Azhar 17">
            <span class="text-[10px] font-semibold text-green-700 text-center leading-tight">SMP Islam Al-Azhar 17</span>
          </a>
        </div>
      </div>

      {{-- ===== KANAN: JARINGAN & PENGAKUAN RESMI ===== --}}
      <div data-aos="fade-left">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Jaringan &amp; Pengakuan Resmi</h2>
        <div class="flex flex-col gap-3">
          @php
          $jaringanList = [
          [
          'title' => 'Akreditasi A — BAN-S/M',
          'sub' => 'Terakreditasi Nasional oleh Badan Akreditasi Nasional Sekolah/Madrasah',
          'icon' => '
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />',
          ],
          [
          'title' => 'Kerjasama YPI Jakarta',
          'sub' => 'Bekerja sama dengan Yayasan Pesantren Islam Al Azhar Jakarta untuk peningkatan kualitas pendidikan dan pengembangan kurikulum',
          'icon' => '
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" />',
          ],
          [
          'title' => 'Jaringan Al-Azhar Indonesia',
          'sub' => 'Terhubung dengan seluruh unit sekolah Al-Azhar di seluruh Indonesia',
          'icon' => '
          <circle cx="12" cy="12" r="10" />
          <line x1="2" y1="12" x2="22" y2="12" />
          <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z" />',
          ],
          [
          'title' => 'Kurikulum Nasional + Al-Azhar',
          'sub' => 'Terintegrasi &amp; Tersertifikasi memadukan Kurikulum Merdeka dengan kurikulum khas Al-Azhar',
          'icon' => '
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0121 17.25c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 013 17.25c0-2.042.897-3.878 2.34-5.172L12 14z" />',
          ],
          ];
          @endphp

          @foreach ($jaringanList as $item)
          <div class="flex items-start gap-4 border-l-4 rounded-r-xl px-4 py-3.5 transition-all duration-200 hover:translate-x-1 hover:shadow-md"
            style="background: rgba(255,255,255,0.88); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border-color: #16a34a; border-top: 1px solid rgba(229,231,235,0.8); border-right: 1px solid rgba(229,231,235,0.8); border-bottom: 1px solid rgba(229,231,235,0.8);"
            data-aos="fade-up"
            data-aos-delay="{{ $loop->index * 80 }}">
            <div class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0"
              style="background: rgba(220,252,231,0.9);">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                {!! $item['icon'] !!}
              </svg>
            </div>
            <div>
              <p class="font-bold text-gray-900 text-sm mb-0.5">{{ $item['title'] }}</p>
              <p class="text-gray-500 text-xs leading-snug">{!! $item['sub'] !!}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       DIVIDER ORNAMEN — pemisah visual antara dua bagian
  ══════════════════════════════════════════════════════════════ --}}
  <div class="relative z-10 flex items-center justify-center py-2 mx-auto max-w-6xl px-4" data-aos="fade-up">
    <div class="flex-1 h-px" style="background: linear-gradient(to right, transparent, rgba(22,163,74,0.25), transparent);"></div>
    <div class="flex items-center gap-3 mx-4">
      <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
        <polygon points="5,0 6.2,3.8 10,3.8 7,6.2 8.1,10 5,7.6 1.9,10 3,6.2 0,3.8 3.8,3.8" fill="#ca8a04" opacity="0.45" />
      </svg>
      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
        <polygon points="8,0 9.8,5.5 15.6,5.5 11,8.9 12.7,14.4 8,11 3.3,14.4 5,8.9 0.4,5.5 6.2,5.5" fill="#16a34a" opacity="0.35" />
      </svg>
      <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <polygon points="10,0 12.2,6.9 19.5,6.9 13.7,11.1 15.9,18 10,13.8 4.1,18 6.3,11.1 0.5,6.9 7.8,6.9" fill="#ca8a04" opacity="0.55" />
      </svg>
      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
        <polygon points="8,0 9.8,5.5 15.6,5.5 11,8.9 12.7,14.4 8,11 3.3,14.4 5,8.9 0.4,5.5 6.2,5.5" fill="#16a34a" opacity="0.35" />
      </svg>
      <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
        <polygon points="5,0 6.2,3.8 10,3.8 7,6.2 8.1,10 5,7.6 1.9,10 3,6.2 0,3.8 3.8,3.8" fill="#ca8a04" opacity="0.45" />
      </svg>
    </div>
    <div class="flex-1 h-px" style="background: linear-gradient(to right, transparent, rgba(22,163,74,0.25), transparent);"></div>
  </div>

  {{-- ══════════════════════════════════════════════════════════════
       BAGIAN 2: INSTAGRAM FEED
  ══════════════════════════════════════════════════════════════ --}}
  <div class="pb-16 pt-10 max-w-6xl mx-auto px-4 relative z-10">

    {{-- Judul --}}
    <div class="text-center mb-10" data-aos="fade-down">
      <h2 class="text-3xl font-bold text-gray-800">Kegiatan Kami</h2>
      <p class="text-gray-500 text-sm mt-2">Update terbaru dari Instagram sekolah</p>
    </div>

    {{-- Wrapper card widget --}}
    <div class="rounded-2xl shadow-lg p-6 md:p-8" data-aos="fade-up" data-aos-delay="100"
      style="background: rgba(255,255,255,0.88); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(22,163,74,0.12);">
      <script src="https://elfsightcdn.com/platform.js" async></script>
      <div class="elfsight-app-4a3e434d-f3e7-4d05-a400-588f70ee7afe" data-elfsight-app-lazy></div>
    </div>

  </div>

</section>

{{-- ===== WhatsApp Floating Button ===== --}}
<a href="https://wa.me/6281200000000" target="_blank" class="wa-float" title="Hubungi via WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
  </svg>
</a>

@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {

    function getVisibleCount(trackEl) {
      var sentinel = document.querySelector('.slider-visible-count');
      if (sentinel) {
        return parseInt(getComputedStyle(sentinel, '::before').content.replace(/"/g, ''), 10) || 1;
      }
      var w = trackEl.parentElement.offsetWidth;
      if (w >= 1024) return 3;
      if (w >= 640) return 2;
      return 1;
    }

    /* ===== SLIDER AGENDA ===== */
    var agendaTrack = document.getElementById('agendaTrack');
    var agendaGap = 24,
      agendaPos, agendaTimer;
    window.slideAgenda = function() {};

    if (agendaTrack && agendaTrack.querySelectorAll('.agenda-card').length > 0) {
      var agendaOriginals = Array.from(agendaTrack.querySelectorAll('.agenda-card'));
      var agendaTotal = agendaOriginals.length;

      agendaOriginals.forEach(function(c) {
        var cl = c.cloneNode(true);
        cl.removeAttribute('data-aos');
        cl.removeAttribute('data-aos-delay');
        agendaTrack.appendChild(cl);
      });
      agendaOriginals.forEach(function(c) {
        var cl = c.cloneNode(true);
        cl.removeAttribute('data-aos');
        cl.removeAttribute('data-aos-delay');
        agendaTrack.insertBefore(cl, agendaTrack.firstChild);
      });

      agendaPos = agendaTotal;

      function agendaCardW() {
        return agendaTrack.children[0].offsetWidth + agendaGap;
      }

      function agendaJump(pos, animate) {
        agendaTrack.style.transition = animate ? 'transform 500ms ease-in-out' : 'none';
        agendaTrack.style.transform = 'translateX(-' + (pos * agendaCardW()) + 'px)';
      }

      function agendaCheckLoop() {
        var vis = getVisibleCount(agendaTrack);
        setTimeout(function() {
          if (agendaPos >= agendaTotal * 2) {
            agendaPos = agendaTotal;
            agendaJump(agendaPos, false);
            setTimeout(function() {
              agendaTrack.style.transition = 'transform 500ms ease-in-out';
            }, 50);
          }
          if (agendaPos < agendaTotal) {
            agendaPos = agendaTotal * 2 - vis;
            agendaJump(agendaPos, false);
            setTimeout(function() {
              agendaTrack.style.transition = 'transform 500ms ease-in-out';
            }, 50);
          }
        }, 510);
      }

      function agendaResetTimer() {
        clearInterval(agendaTimer);
        agendaTimer = setInterval(function() {
          window.slideAgenda(1);
        }, 4000);
      }
      window.slideAgenda = function(dir) {
        agendaPos += dir;
        agendaJump(agendaPos, true);
        agendaCheckLoop();
        agendaResetTimer();
      };
      agendaJump(agendaPos, false);
      setTimeout(function() {
        agendaTrack.style.transition = 'transform 500ms ease-in-out';
      }, 50);
      agendaResetTimer();

      window.addEventListener('resize', function() {
        agendaJump(agendaPos, false);
      });
    }

    /* ===== SLIDER EKSTRAKULIKULER — running text + pause on hover + swipe ===== */
    (function() {
      var track = document.getElementById('ekstraTrack');
      if (!track || !track.querySelector('.ekstra-card')) return;

      var originals = Array.from(track.querySelectorAll('.ekstra-card'));
      var GAP = 24;

      originals.forEach(function(c) {
        var cl = c.cloneNode(true);
        cl.removeAttribute('data-aos');
        cl.removeAttribute('data-aos-delay');
        track.appendChild(cl);
      });

      var speed = 0.6;
      var pos = 0;
      var paused = false;
      var isDragging = false;
      var dragStart = null;
      var posOnDrag = 0;

      function totalOriginalW() {
        var cards = track.querySelectorAll('.ekstra-card');
        var w = 0;
        for (var i = 0; i < originals.length; i++) {
          w += cards[i].offsetWidth + GAP;
        }
        return w;
      }

      function tick() {
        if (!paused) {
          pos += speed;
          var loopW = totalOriginalW();
          if (pos >= loopW) pos -= loopW;
          track.style.transform = 'translateX(-' + pos + 'px)';
        }
        requestAnimationFrame(tick);
      }

      track.addEventListener('mouseenter', function() {
        paused = true;
        track.style.cursor = 'grab';
      });
      track.addEventListener('mouseleave', function() {
        paused = false;
        track.style.cursor = 'grab';
      });

      function onDragStart(x) {
        dragStart = x;
        posOnDrag = pos;
        paused = true;
        isDragging = true;
        track.style.cursor = 'grabbing';
      }

      function onDragMove(x) {
        if (!isDragging) return;
        var delta = dragStart - x;
        var loopW = totalOriginalW();
        pos = ((posOnDrag + delta) % loopW + loopW) % loopW;
        track.style.transform = 'translateX(-' + pos + 'px)';
      }

      function onDragEnd() {
        if (!isDragging) return;
        isDragging = false;
        paused = false;
        track.style.cursor = 'grab';
      }

      track.addEventListener('mousedown', function(e) {
        onDragStart(e.clientX);
      });
      window.addEventListener('mousemove', function(e) {
        onDragMove(e.clientX);
      });
      window.addEventListener('mouseup', onDragEnd);

      track.addEventListener('touchstart', function(e) {
        onDragStart(e.touches[0].clientX);
      }, {
        passive: true
      });
      track.addEventListener('touchmove', function(e) {
        onDragMove(e.touches[0].clientX);
      }, {
        passive: true
      });
      track.addEventListener('touchend', onDragEnd);

      track.addEventListener('click', function(e) {
        if (dragStart !== null && Math.abs(dragStart - (e.clientX || dragStart)) > 5) {
          e.preventDefault();
        }
      });

      track.style.transition = 'none';
      requestAnimationFrame(tick);
    })();

    /* ===== COUNTER ANIMASI ===== */
    function animateCounter(el) {
      var target = parseInt(el.dataset.target, 10) || 0;
      if (target === 0) {
        el.textContent = 0;
        return;
      }
      var duration = 1500,
        startTime = performance.now();

      function tick(now) {
        var p = Math.min((now - startTime) / duration, 1);
        el.textContent = Math.floor((1 - Math.pow(1 - p, 3)) * target);
        if (p < 1) {
          requestAnimationFrame(tick);
        } else {
          el.textContent = target;
        }
      }
      requestAnimationFrame(tick);
    }
    setTimeout(function() {
      document.querySelectorAll('.counter').forEach(animateCounter);
    }, 400);

  });
</script>

<div class="slider-visible-count" style="position:absolute;visibility:hidden;pointer-events:none;"></div>
@endpush