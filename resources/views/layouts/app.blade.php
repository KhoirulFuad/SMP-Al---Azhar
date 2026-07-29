<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('storage/navbarfooter/logosmp.png') }}">
  <title>@yield('title', 'SMP Islam Al-Azhar 17')</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Poppins, sans-serif;
      background-color: #F9F6F0;
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

    /* ===== LOADING PAGE ===== */
    #pageLoader {
      position: fixed;
      inset: 0;
      z-index: 99999;
      background: linear-gradient(135deg, #0a3d14 0%, #0f5c22 50%, #164e2a 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.25s ease;
    }

    #pageLoader.visible {
      opacity: 1;
      pointer-events: all;
    }

    #pageLoader .loader-pattern {
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
    }

    #pageLoader .loader-deco-1 {
      position: absolute;
      top: -60px;
      left: -60px;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.03);
      animation: pulseSoft 8s ease-in-out infinite;
    }

    #pageLoader .loader-deco-2 {
      position: absolute;
      bottom: -40px;
      right: -40px;
      width: 240px;
      height: 240px;
      border-radius: 50%;
      background: rgba(253, 224, 71, 0.04);
      animation: pulseSoft 10s ease-in-out infinite 1s;
    }

    #pageLoader img.loader-logo {
      position: relative;
      z-index: 1;
      width: 84px;
      height: 84px;
      object-fit: contain;
      border-radius: 50%;
      animation: loaderPulse 1.6s ease-in-out infinite;
    }

    #pageLoader .loader-text {
      position: relative;
      z-index: 1;
      text-align: center;
    }

    #pageLoader .loader-text p.title {
      color: #fde047;
      font-size: 1.1rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      margin: 0;
    }

    #pageLoader .loader-text p.sub {
      color: rgba(255, 255, 255, 0.55);
      font-size: 0.75rem;
      margin: 4px 0 0;
      letter-spacing: 0.1em;
    }

    #pageLoader .loader-dots {
      position: relative;
      z-index: 1;
      display: flex;
      gap: 6px;
      margin-top: 4px;
    }

    #pageLoader .loader-dots span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #bbf7d0;
    }

    #pageLoader .loader-dots span:nth-child(1) {
      animation: loaderDot 1.2s ease-in-out infinite 0s;
    }

    #pageLoader .loader-dots span:nth-child(2) {
      animation: loaderDot 1.2s ease-in-out infinite 0.2s;
    }

    #pageLoader .loader-dots span:nth-child(3) {
      animation: loaderDot 1.2s ease-in-out infinite 0.4s;
    }

    @keyframes loaderPulse {

      0%,
      100% {
        transform: scale(1);
        opacity: 0.9;
      }

      50% {
        transform: scale(1.08);
        opacity: 1;
      }
    }

    @keyframes loaderDot {

      0%,
      100% {
        transform: translateY(0);
        opacity: 0.4;
      }

      50% {
        transform: translateY(-7px);
        opacity: 1;
      }
    }

    /* ===== NAVBAR ===== */
    .nav-link {
      position: relative;
      transition: color 0.2s, transform 0.2s;
      display: inline-block;
    }

    .nav-link:hover {
      transform: scale(1.12);
      color: #fde047;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 2px;
      background: #fde047;
      border-radius: 2px;
      transition: width 0.25s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
      width: 100%;
    }

    .social-icon {
      transition: transform 0.2s, background 0.2s;
      display: inline-flex;
    }

    .social-icon:hover {
      transform: scale(1.18);
    }

    /* Mobile menu */
    #mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.35s ease;
    }

    #mobile-menu.open {
      max-height: 400px;
    }
  </style>

  @stack('styles')
</head>

<body class="flex flex-col min-h-screen">

  {{-- ===== LOADING PAGE OVERLAY ===== --}}
  <div id="pageLoader">
    <div class="loader-pattern"></div>
    <div class="loader-deco-1"></div>
    <div class="loader-deco-2"></div>
    <img src="{{ asset('storage/navbarfooter/logosmp.png') }}" class="loader-logo" alt="Logo Al-Azhar">
    <div class="loader-text">
      <p class="title">SMP Islam Al-Azhar 17</p>
      <p class="sub">PONTIANAK</p>
    </div>
    <div class="loader-dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  {{-- ===== NAVBAR ===== --}}
  <header class="bg-green-700 py-3 sticky top-0 z-50 shadow-md">
    <div class="max-w-6xl mx-auto flex items-center justify-between px-4">

      <a href="{{ route('beranda') }}" class="flex items-center gap-2 flex-shrink-0">
        <img src="{{ asset('storage/navbarfooter/logosmp.png') }}" class="w-14 h-14 rounded-full object-cover" alt="Logo">
        <img src="{{ asset('storage/navbarfooter/alazharputih.png') }}" class="h-12" alt="Al-Azhar 17">
      </a>

      {{-- Desktop Nav --}}
      <nav class="hidden md:flex flex-1 justify-center">
        <ul class="flex gap-8 text-white text-sm font-semibold">
          <li><a href="{{ route('beranda') }}" class="nav-link {{ request()->routeIs('beranda','sambutan') ? 'active text-yellow-300' : '' }}">Beranda</a></li>
          <li><a href="{{ route('profil') }}" class="nav-link {{ request()->routeIs('profil') ? 'active text-yellow-300' : '' }}">Profil Kami</a></li>
          <li><a href="{{ route('prestasi.index') }}" class="nav-link {{ request()->routeIs('prestasi.*') ? 'active text-yellow-300' : '' }}">Prestasi</a></li>
          <li><a href="{{ route('berita.index') }}" class="nav-link {{ request()->routeIs('berita.*') ? 'active text-yellow-300' : '' }}">Berita</a></li>
          <li><a href="{{ route('agenda.index') }}" class="nav-link {{ request()->routeIs('agenda.*') ? 'active text-yellow-300' : '' }}">Agenda</a></li>
          <li><a href="https://pmb.alazharpontianak.id/" class="nav-link">PMB</a></li>
        </ul>
      </nav>

      {{-- Sosmed desktop --}}
      <div class="hidden md:flex items-center gap-3 flex-shrink-0">
        <a href="#" class="social-icon text-white hover:text-yellow-300" title="WhatsApp">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
          </svg>
        </a>
        <a href="#" class="social-icon text-white hover:text-yellow-300" title="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
        </a>
        <a href="https://www.instagram.com/smpia17pontianak/" target="_blank" class="social-icon text-white hover:text-yellow-300" title="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
          </svg>
        </a>
      </div>

      {{-- Hamburger mobile --}}
      <button id="hamburger" class="md:hidden text-white focus:outline-none ml-4" aria-label="Toggle menu">
        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="md:hidden bg-green-800 px-4">
      <ul class="flex flex-col gap-1 py-3 text-white text-sm font-semibold">
        <li><a href="{{ route('beranda') }}" class="block py-2 px-3 rounded hover:bg-green-700 {{ request()->routeIs('beranda','sambutan') ? 'text-yellow-300' : '' }}">Beranda</a></li>
        <li><a href="{{ route('profil') }}" class="block py-2 px-3 rounded hover:bg-green-700 {{ request()->routeIs('profil') ? 'text-yellow-300' : '' }}">Profil Kami</a></li>
        <li><a href="{{ route('prestasi.index') }}" class="block py-2 px-3 rounded hover:bg-green-700 {{ request()->routeIs('prestasi.*') ? 'text-yellow-300' : '' }}">Prestasi</a></li>
        <li><a href="{{ route('berita.index') }}" class="block py-2 px-3 rounded hover:bg-green-700 {{ request()->routeIs('berita.*') ? 'text-yellow-300' : '' }}">Berita</a></li>
        <li><a href="{{ route('agenda.index') }}" class="block py-2 px-3 rounded hover:bg-green-700 {{ request()->routeIs('agenda.*') ? 'text-yellow-300' : '' }}">Agenda</a></li>
        <li><a href="https://pmb.alazharpontianak.id/" class="block py-2 px-3 rounded hover:bg-green-700">PMB</a></li>
      </ul>
      <div class="flex gap-4 pb-4 px-3">
        <a href="#" class="social-icon text-white hover:text-yellow-300" title="WhatsApp">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
          </svg>
        </a>
        <a href="#" class="social-icon text-white hover:text-yellow-300" title="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
        </a>
        <a href="#" class="social-icon text-white hover:text-yellow-300" title="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
          </svg>
        </a>
      </div>
    </div>
  </header>

  <main class="flex-1">
    @yield('content')
  </main>

  {{-- ===== FOOTER ===== --}}
  <footer class="bg-gray-900 text-white">
    <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">

      <div>
        <div class="flex items-center gap-2 mb-4">
          <img src="{{ asset('storage/navbarfooter/logosmp.png') }}" class="w-10 h-10 rounded-full object-cover" alt="Logo">
          <img src="{{ asset('storage/navbarfooter/alazharputih.png') }}" class="h-8" alt="Al-Azhar 17">
        </div>
        <p class="text-gray-400 text-sm mb-5">Website resmi milik SMP Islam Al-Azhar 17 Pontianak.</p>
        <div class="space-y-3">
          <div class="flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
            <a href="https://www.google.com/maps?q=-0.0586132,109.351169"
              target="_blank" rel="noopener noreferrer"
              class="text-gray-300 text-sm hover:text-white transition-colors">
              Jl. Ahmad Yani No.1, Pontianak, Kalimantan Barat
            </a>
          </div>
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <p class="text-gray-300 text-sm">smpalazhar17@gmail.com</p>
          </div>
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-gray-300 text-sm">07.00 – 15.00 WIB</p>
          </div>
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
            <p class="text-gray-300 text-sm">+62 812-xxxx-xxxx</p>
          </div>
        </div>
      </div>

      <div>
        <h4 class="font-bold text-white text-lg mb-4">Ikuti Kami</h4>
        <div class="flex gap-3 mb-6">
          <a href="#" class="social-icon bg-green-700 hover:bg-green-600 transition p-2.5 rounded-full" title="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
          </a>
          <a href="#" class="social-icon bg-green-700 hover:bg-green-600 transition p-2.5 rounded-full" title="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg>
          </a>
          <a href="https://www.instagram.com/smpia17pontianak/" target="_blank" class="social-icon bg-green-700 hover:bg-green-600 transition p-2.5 rounded-full" title="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
            </svg>
          </a>
        </div>

        <h4 class="font-bold text-white text-lg mb-4">Navigasi</h4>
        <ul class="space-y-2 text-sm text-gray-400">
          <li><a href="{{ route('beranda') }}" class="nav-link hover:text-white transition-colors">Beranda</a></li>
          <li><a href="{{ route('profil') }}" class="nav-link hover:text-white transition-colors">Profil Kami</a></li>
          <li><a href="{{ route('prestasi.index') }}" class="nav-link hover:text-white transition-colors">Prestasi</a></li>
          <li><a href="{{ route('berita.index') }}" class="nav-link hover:text-white transition-colors">Berita</a></li>
          <li><a href="{{ route('agenda.index') }}" class="nav-link hover:text-white transition-colors">Agenda</a></li>
          <li><a href="#" class="nav-link hover:text-white transition-colors">PMB</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-bold text-white text-lg mb-4">Lokasi Kami</h4>
        <div class="rounded-xl overflow-hidden border-2 border-green-700">
          <iframe
            src="https://maps.google.com/maps?q=-0.0586132,109.351169&z=18&output=embed"
            width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>

    </div>

    <div class="border-t border-gray-700"></div>
    <div class="py-4 text-center text-sm text-gray-500">
      &copy; {{ date('Y') }} SMP Islam Al-Azhar 17 Pontianak. All rights reserved.
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 700,
      once: false,
      offset: 60
    });

    /* ===== HAMBURGER ===== */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    hamburger.addEventListener('click', function() {
      const isOpen = mobileMenu.classList.toggle('open');
      iconOpen.classList.toggle('hidden', isOpen);
      iconClose.classList.toggle('hidden', !isOpen);
    });

    /* ===== PAGE LOADER ===== */
    (function() {
      var loader = document.getElementById('pageLoader');
      var leaving = false;
      var origin = window.location.origin;

      function showLoader(callback) {
        loader.classList.add('visible');
        setTimeout(callback, 600);
      }

      function hideLoader() {
        loader.classList.remove('visible');
        leaving = false;
      }

      /* Intercept semua klik link internal */
      document.addEventListener('click', function(e) {
        var anchor = e.target.closest('a');
        if (!anchor) return;

        var href = anchor.getAttribute('href');
        if (!href) return;

        /* Lewati: tab baru, anchor, javascript:, mailto:, tel:, link eksternal */
        if (
          anchor.target === '_blank' ||
          href.startsWith('#') ||
          href.startsWith('javascript') ||
          href.startsWith('mailto') ||
          href.startsWith('tel') ||
          (href.startsWith('http') && !href.startsWith(origin))
        ) return;

        e.preventDefault();
        if (leaving) return;
        leaving = true;

        showLoader(function() {
          window.location.href = href;
        });
      });

      /* Sembunyikan loader saat halaman selesai dimuat (termasuk back/forward) */
      window.addEventListener('pageshow', function() {
        hideLoader();
      });
      window.addEventListener('load', function() {
        hideLoader();
      });
    })();
  </script>

  @stack('scripts')

</body>

</html>