{{-- resources/views/berita.blade.php --}}
@extends('layouts.app')

@section('title', 'Berita - SMP Islam Al-Azhar 17')

@push('styles')
<style>
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

  /* Hero */
  .hero-banner {
    height: 260px;
    position: relative;
    overflow: hidden;
  }

  .hero-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transform: scale(1.06);
    transition: transform 8s ease;
  }

  .hero-banner:hover img {
    transform: scale(1);
  }

  .hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
  }

  /* Layout utama dengan sidebar */
  .page-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 16px 40px 24px;
    display: flex;
    gap: 36px;
    align-items: flex-start;
    position: relative;
    z-index: 10;
  }

  /* Konten kiri */
  .main-content {
    flex: 1;
    min-width: 0;
  }

  /* Sidebar kanan */
  .sidebar {
    width: 248px;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
    position: sticky;
    top: 24px;
    margin-left: 12px;
  }

  /* Sidebar Card */
  .sidebar-card {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    border: 1px solid #e5e7eb;
    background: #ffffff;
    transition: transform 0.25s, box-shadow 0.25s;
  }

  .sidebar-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 28px rgba(22, 163, 74, 0.13);
  }

  .sidebar-card-header {
    padding: 14px 16px 12px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .sidebar-card-header.prestasi {
    background: linear-gradient(135deg, #15803d 0%, #166534 100%);
  }

  .sidebar-card-header.agenda {
    background: linear-gradient(135deg, #0f766e 0%, #134e4a 100%);
  }

  .sidebar-card-icon {
    width: 34px;
    height: 34px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.18);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .sidebar-card-icon svg {
    width: 18px;
    height: 18px;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .sidebar-card-label {
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.04em;
    line-height: 1.2;
  }

  .sidebar-card-sublabel {
    color: rgba(255, 255, 255, 0.72);
    font-size: 10.5px;
    margin-top: 2px;
    line-height: 1.3;
  }

  /* Daftar item mini di dalam sidebar */
  .sidebar-list {
    padding: 10px 0 4px;
  }

  .sidebar-list-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 9px 14px;
    text-decoration: none;
    border-bottom: 1px solid #f3f4f6;
    transition: background 0.15s;
  }

  .sidebar-list-item:last-child {
    border-bottom: none;
  }

  .sidebar-list-item:hover {
    background: #f0fdf4;
  }

  .sidebar-list-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #16a34a;
    flex-shrink: 0;
    margin-top: 5px;
  }

  .sidebar-list-dot.teal {
    background: #0f766e;
  }

  .sidebar-list-text {
    font-size: 12px;
    color: #374151;
    line-height: 1.45;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
  }

  .sidebar-list-date {
    font-size: 10px;
    color: #9ca3af;
    margin-top: 3px;
    display: block;
  }

  /* Tombol "Lihat Semua" */
  .sidebar-see-all {
    display: block;
    text-align: center;
    padding: 9px 14px;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none;
    border-top: 1px solid #e5e7eb;
    transition: background 0.15s, color 0.15s;
  }

  .sidebar-see-all.prestasi {
    color: #15803d;
  }

  .sidebar-see-all.prestasi:hover {
    background: #15803d;
    color: #fff;
  }

  .sidebar-see-all.agenda {
    color: #0f766e;
  }

  .sidebar-see-all.agenda:hover {
    background: #0f766e;
    color: #fff;
  }

  /* Card Berita */
  .berita-card {
    display: flex;
    align-items: center;
    gap: 20px;
    padding-bottom: 28px;
    margin-bottom: 28px;
    border-bottom: 1px solid #e5e7eb;
    transition: transform 0.2s;
  }

  .berita-card:hover {
    transform: translateX(4px);
  }

  .berita-card:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
  }

  .berita-rank {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: linear-gradient(135deg, #16a34a, #0a3d14);
    color: #ffffff;
    font-size: 12px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  }

  .berita-img {
    flex-shrink: 0;
    width: 176px;
    height: 176px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
  }

  .berita-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
  }

  .berita-card:hover .berita-img img {
    transform: scale(1.05);
  }

  .berita-img-placeholder {
    width: 100%;
    height: 100%;
    background: #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9ca3af;
    font-size: 13px;
  }

  .berita-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex-grow: 1;
  }

  .berita-title {
    color: #15803d;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.4;
    text-decoration: none;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: color 0.2s;
  }

  .berita-card:hover .berita-title {
    color: #166534;
    text-decoration: underline;
  }

  .berita-desc {
    font-size: 13px;
    color: #4b5563;
    margin-top: 8px;
    line-height: 1.6;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .berita-date {
    font-size: 12px;
    color: #9ca3af;
    margin-top: 10px;
  }

  .read-more {
    display: inline-block;
    align-self: flex-start;
    margin-top: 12px;
    font-size: 12px;
    font-weight: 600;
    color: #15803d;
    text-decoration: none;
    border: 1.5px solid #15803d;
    padding: 5px 14px;
    border-radius: 6px;
    transition: background 0.2s, color 0.2s;
  }

  .read-more:hover {
    background: #15803d;
    color: #fff;
  }

  .pagination-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4px;
    margin-top: 32px;
  }

  .page-btn {
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 13px;
    background: #f3f4f6;
    color: #374151;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
  }

  .page-btn:hover {
    background: #15803d;
    color: #fff;
  }

  .page-btn.active {
    background: #15803d;
    color: #fff;
    font-weight: 600;
  }

  .page-btn.disabled {
    color: #9ca3af;
    cursor: not-allowed;
    pointer-events: none;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .sidebar {
      display: none;
    }

    .page-wrapper {
      padding: 24px 14px;
    }
  }
</style>
@endpush

@section('content')

{{-- HERO BANNER --}}
<div class="hero-banner">
  <img src="{{ asset('storage/beranda/gedungsmp2.png') }}" alt="Berita">
  <div class="hero-overlay">
    <h1 style="color:#fff; font-size:36px; font-weight:700; letter-spacing:6px; margin:0;">BERITA TERKINI</h1>
    <p style="color:rgba(255,255,255,0.7); font-size:14px; letter-spacing:0.06em; margin:0;">Kabar hangat dari lingkungan SMP Islam Al-Azhar 17 Pontianak</p>
  </div>
</div>

{{-- MAIN SECTION --}}
<section class="relative overflow-hidden" style="background-color:#F9F6F0; min-height:60vh;">

  {{-- Dekorasi Latar Belakang --}}
  <div class="deco" style="top:-40px;left:-40px;animation:pulseSoft 10s ease-in-out infinite;">
    <svg width="220" height="220">
      <circle cx="110" cy="110" r="110" fill="#16a34a" opacity="0.07" />
    </svg>
  </div>
  <div class="deco" style="bottom:80px;left:2%;">
    <div style="display:grid;grid-template-columns:repeat(5,1fr);gap:7px;">
      @for ($i = 0; $i < 20; $i++)
        <div style="width:5px;height:5px;border-radius:50%;background:#16a34a;opacity:0.2;">
    </div>
    @endfor
  </div>
  </div>

  <div class="page-wrapper">

    {{-- ===================== KONTEN KIRI ===================== --}}
    <div class="main-content">

      @forelse ($beritas as $item)
      <div class="berita-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">

        {{-- 1. NOMOR RANKING --}}
        <div class="berita-rank">
          {{ $loop->iteration + ($beritas->currentPage() - 1) * $beritas->perPage() }}
        </div>

        {{-- 2. GAMBAR CARD --}}
        <div class="berita-img">
          @if ($item->image)
          <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
          @else
          <div class="berita-img-placeholder">No Image</div>
          @endif
        </div>

        {{-- 3. KONTEN TEKS --}}
        <div class="berita-content">
          <a href="{{ route('berita.show', $item->slug) }}" class="berita-title">{{ $item->title }}</a>
          <p class="berita-desc">{{ Str::limit(strip_tags($item->content), 150) }}</p>
          <p class="berita-date"> {{ \Carbon\Carbon::parse($item->news_date)->translatedFormat('d F Y') }}</p>
          <a href="{{ route('berita.show', $item->slug) }}" class="read-more">Baca Selengkapnya →</a>
        </div>

      </div>
      @empty
      <p style="text-align:center; color:#6b7280; padding:60px 0;">Belum ada data berita.</p>
      @endforelse

      {{-- PAGINATION --}}
      <div class="pagination-wrap" data-aos="fade-up">
        @if ($beritas->onFirstPage())
        <span class="page-btn disabled">Sebelumnya</span>
        @else
        <a href="{{ $beritas->previousPageUrl() }}" class="page-btn">Sebelumnya</a>
        @endif

        @foreach ($beritas->links()->elements as $element)
        @if (is_string($element))
        <span style="padding:0 4px; color:#9ca3af;">{{ $element }}</span>
        @endif
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $beritas->currentPage())
        <span class="page-btn active">{{ $page }}</span>
        @else
        <a href="{{ $url }}" class="page-btn">{{ $page }}</a>
        @endif
        @endforeach
        @endif
        @endforeach

        @if ($beritas->hasMorePages())
        <a href="{{ $beritas->nextPageUrl() }}" class="page-btn">Selanjutnya</a>
        @else
        <span class="page-btn disabled">Selanjutnya</span>
        @endif
      </div>

    </div>
    {{-- ===================== END KONTEN KIRI ===================== --}}


    {{-- ===================== SIDEBAR KANAN ===================== --}}
    <aside class="sidebar">

      {{-- ── SIDEBAR PRESTASI ── --}}
      <div
        class="sidebar-card"
        data-aos="fade-left"
        data-aos-delay="100"
        data-aos-duration="700">
        <div class="sidebar-card-header prestasi">
          <div class="sidebar-card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z" />
            </svg>
          </div>
          <div>
            <div class="sidebar-card-label">Prestasi Terkini</div>
            <div class="sidebar-card-sublabel">Pencapaian siswa-siswi terbaru</div>
          </div>
        </div>

        <div class="sidebar-list">
          @forelse ($latestPrestasi as $prestasi)
          <a href="{{ route('prestasi.show', $prestasi->id) }}" class="sidebar-list-item">
            <div class="sidebar-list-dot"></div>
            <div>
              <span class="sidebar-list-text">{{ $prestasi->title }}</span>
              <span class="sidebar-list-date">{{ \Carbon\Carbon::parse($prestasi->achievement_date)->translatedFormat('d M Y') }}</span>
            </div>
          </a>
          @empty
          <p style="font-size:12px; color:#9ca3af; padding:10px 14px; margin:0;">Belum ada prestasi.</p>
          @endforelse
        </div>

        <a href="{{ route('prestasi.index') }}" class="sidebar-see-all prestasi">Lihat Semua Prestasi →</a>
      </div>

      {{-- ── SIDEBAR AGENDA ── --}}
      <div
        class="sidebar-card"
        data-aos="fade-left"
        data-aos-delay="250"
        data-aos-duration="700">
        <div class="sidebar-card-header agenda">
          <div class="sidebar-card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
              <path d="M16 2v4M8 2v4M3 10h18" />
            </svg>
          </div>
          <div>
            <div class="sidebar-card-label">Agenda Sekolah</div>
            <div class="sidebar-card-sublabel">Jadwal kegiatan mendatang</div>
          </div>
        </div>

        <div class="sidebar-list">
          @forelse ($latestAgenda as $agenda)
          <a href="{{ route('agenda.show', $agenda->id) }}" class="sidebar-list-item">
            <div class="sidebar-list-dot teal"></div>
            <div>
              <span class="sidebar-list-text">{{ $agenda->title }}</span>
              <span class="sidebar-list-date">{{ \Carbon\Carbon::parse($agenda->agenda_date)->translatedFormat('d M Y') }}</span>
            </div>
          </a>
          @empty
          <p style="font-size:12px; color:#9ca3af; padding:10px 14px; margin:0;">Belum ada agenda.</p>
          @endforelse
        </div>

        <a href="{{ route('agenda.index') }}" class="sidebar-see-all agenda">Lihat Semua Agenda →</a>
      </div>

    </aside>

  </div>
</section>

@endsection