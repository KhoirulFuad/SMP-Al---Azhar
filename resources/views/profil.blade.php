{{-- resources/views/profil.blade.php --}}
@extends('layouts.app')

@section('title', 'Profil Kami - SMP Islam Al-Azhar 17')

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

  .richtext ul {
    list-style-type: disc;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
  }

  .richtext ol {
    list-style-type: decimal;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
  }

  .richtext li {
    margin-bottom: 0.4rem;
  }

  .richtext p {
    margin-bottom: 0.75rem;
  }

  .richtext h2 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
  }

  .richtext h3 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
  }

  .richtext strong {
    font-weight: 700;
  }

  .richtext a {
    color: #15803d;
    text-decoration: underline;
  }
</style>
@endpush

@section('content')

<section class="relative overflow-hidden" style="background-color:#F9F6F0; min-height:100vh;">

  {{-- Dekorasi kiri --}}
  <div class="deco" style="top:-40px;left:-40px;animation:pulseSoft 10s ease-in-out infinite;"><svg width="220" height="220">
      <circle cx="110" cy="110" r="110" fill="#16a34a" opacity="0.07" />
    </svg></div>
  <div class="deco" style="top:20px;left:60px;animation:floatUp 7s ease-in-out infinite 0.5s;"><svg width="22" height="22">
      <rect width="22" height="22" rx="4" fill="#16a34a" opacity="0.15" transform="rotate(25 11 11)" />
    </svg></div>
  <div class="deco" style="top:100px;left:20px;animation:floatDown 8s ease-in-out infinite 1s;"><svg width="14" height="14">
      <circle cx="7" cy="7" r="7" fill="#ca8a04" opacity="0.2" />
    </svg></div>
  <div class="deco" style="top:30%;left:2%;animation:drift 11s ease-in-out infinite;"><svg width="36" height="36">
      <polygon points="18,0 36,36 0,36" fill="#16a34a" opacity="0.1" />
    </svg></div>
  <div class="deco" style="top:55%;left:3%;animation:floatUp 9s ease-in-out infinite 1.5s;"><svg width="18" height="18">
      <rect width="18" height="18" rx="3" fill="#ca8a04" opacity="0.15" transform="rotate(40 9 9)" />
    </svg></div>
  <div class="deco" style="bottom:120px;left:5%;animation:floatDown 10s ease-in-out infinite 2s;"><svg width="28" height="28">
      <polygon points="14,0 28,28 0,28" fill="#16a34a" opacity="0.1" />
    </svg></div>
  <div class="deco" style="bottom:40px;left:2%;animation:floatUp 8s ease-in-out infinite 1s;"><svg width="16" height="16">
      <circle cx="8" cy="8" r="8" fill="#ca8a04" opacity="0.15" />
    </svg></div>

  {{-- Dekorasi kanan --}}
  <div class="deco" style="top:-20px;right:-20px;animation:pulseSoft 11s ease-in-out infinite 1s;"><svg width="200" height="200">
      <circle cx="100" cy="100" r="100" fill="#ca8a04" opacity="0.06" />
    </svg></div>
  <div class="deco" style="top:30px;right:50px;animation:floatDown 9s ease-in-out infinite 0.5s;"><svg width="32" height="32">
      <rect width="32" height="32" rx="6" fill="#ca8a04" opacity="0.12" transform="rotate(20 16 16)" />
    </svg></div>
  <div class="deco" style="top:120px;right:15px;animation:floatUp 6s ease-in-out infinite 1.5s;"><svg width="16" height="16">
      <circle cx="8" cy="8" r="8" fill="#16a34a" opacity="0.18" />
    </svg></div>
  <div class="deco" style="top:35%;right:3%;animation:drift 13s ease-in-out infinite 1s;"><svg width="28" height="28">
      <polygon points="14,0 28,28 0,28" fill="#ca8a04" opacity="0.12" />
    </svg></div>
  <div class="deco" style="top:58%;right:2%;animation:floatDown 8s ease-in-out infinite 0.5s;"><svg width="20" height="20">
      <rect width="20" height="20" rx="4" fill="#16a34a" opacity="0.13" transform="rotate(30 10 10)" />
    </svg></div>
  <div class="deco" style="bottom:80px;right:5%;animation:floatUp 9s ease-in-out infinite 2s;"><svg width="24" height="24">
      <circle cx="12" cy="12" r="12" fill="#ca8a04" opacity="0.1" />
    </svg></div>
  <div class="deco" style="bottom:30px;right:3%;animation:drift 12s ease-in-out infinite 0.5s;"><svg width="30" height="30">
      <polygon points="15,0 30,30 0,30" fill="#16a34a" opacity="0.09" />
    </svg></div>

  {{-- Grid titik kiri bawah --}}
  <div class="deco" style="bottom:100px;left:2%;">
    <div style="display:grid;grid-template-columns:repeat(5,1fr);gap:7px;">
      @for ($i = 0; $i < 20; $i++)
        <div style="width:5px;height:5px;border-radius:50%;background:#16a34a;opacity:0.2;">
    </div>
    @endfor
  </div>
  </div>

  {{-- Grid titik kanan atas --}}
  <div class="deco" style="top:30px;right:3%;">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:6px;">
      @for ($i = 0; $i < 12; $i++)
        <div style="width:5px;height:5px;border-radius:50%;background:#ca8a04;opacity:0.2;">
    </div>
    @endfor
  </div>
  </div>

  {{-- Grid titik kiri tengah --}}
  <div class="deco" style="top:48%;left:1%;">
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:6px;">
      @for ($i = 0; $i < 9; $i++)
        <div style="width:4px;height:4px;border-radius:50%;background:#ca8a04;opacity:0.18;">
    </div>
    @endfor
  </div>
  </div>

  {{-- Grid titik kanan tengah --}}
  <div class="deco" style="top:70%;right:1%;">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:6px;">
      @for ($i = 0; $i < 12; $i++)
        <div style="width:4px;height:4px;border-radius:50%;background:#16a34a;opacity:0.18;">
    </div>
    @endfor
  </div>
  </div>

  {{-- Bintang dekoratif --}}
  <div class="deco" style="top:25px;left:38%;font-size:16px;opacity:0.25;color:#16a34a;animation:floatUp 5s ease-in-out infinite;">✦</div>
  <div class="deco" style="top:52%;left:6%;font-size:12px;opacity:0.2;color:#ca8a04;animation:floatDown 7s ease-in-out infinite 0.5s;">★</div>
  <div class="deco" style="bottom:160px;right:8%;font-size:12px;opacity:0.3;color:#ca8a04;animation:floatDown 6s ease-in-out infinite 1s;">★</div>
  <div class="deco" style="top:70px;right:28%;font-size:10px;opacity:0.2;color:#16a34a;animation:floatUp 7s ease-in-out infinite 0.5s;">✦</div>
  <div class="deco" style="bottom:240px;left:8%;font-size:14px;opacity:0.2;color:#16a34a;animation:floatUp 6s ease-in-out infinite 1s;">✦</div>
  <div class="deco" style="top:42%;right:6%;font-size:10px;opacity:0.2;color:#ca8a04;animation:floatDown 8s ease-in-out infinite 1.5s;">★</div>

  {{-- Konten utama --}}
  <div class="max-w-5xl mx-auto py-10 px-4 relative" style="z-index:10;">

    {{-- Tombol Kembali --}}
    <div class="mb-6" data-aos="fade-right">
      <a href="{{ route('beranda') }}"
        class="inline-flex items-center gap-2 border border-green-600 text-green-700 font-semibold px-5 py-2 rounded-lg hover:bg-green-600 hover:text-white transition-colors text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Kembali
      </a>
    </div>

    {{-- ===== SEJARAH SINGKAT ===== --}}
    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8" data-aos="fade-up">
      <div class="relative">
        <img src="{{ asset('storage/beranda/gedungsmp2.png') }}"
          class="w-full h-[150px] object-cover object-center"
          alt="Sejarah Singkat">
        <div class="absolute inset-0 flex items-center justify-center" style="background-color: rgba(6,78,59,0.65);">
          <h2 class="text-3xl font-bold text-white tracking-widest uppercase">Sejarah Singkat</h2>
        </div>
      </div>
      <div class="p-6 text-gray-700 text-sm leading-relaxed richtext">
        @if ($profil && $profil->history)
        {!! $profil->history !!}
        @else
        <p class="text-gray-400 text-center py-4">Belum ada data sejarah.</p>
        @endif
      </div>
    </div>

    {{-- ===== VISI & MISI ===== --}}
    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8" data-aos="fade-up" data-aos-delay="100">
      <div class="relative">
        <img src="{{ asset('storage/beranda/gedungsmp2.png') }}"
          class="w-full h-[150px] object-cover object-center"
          alt="Visi & Misi">
        <div class="absolute inset-0 flex items-center justify-center" style="background-color: rgba(6,78,59,0.65);">
          <h2 class="text-3xl font-bold text-white tracking-widest uppercase">Visi &amp; Misi</h2>
        </div>
      </div>
      <div class="p-6 text-gray-700 text-sm leading-relaxed richtext">
        @if ($profil && $profil->vision)
        <p class="font-bold mb-1">VISI :</p>
        <div class="mb-5">{!! $profil->vision !!}</div>
        @endif

        @if ($profil && $profil->mission)
        <p class="font-bold mb-2">MISI :</p>
        <div>{!! $profil->mission !!}</div>
        @endif

        @if (!$profil || (!$profil->vision && !$profil->mission))
        <p class="text-gray-400 text-center py-4">Belum ada data visi & misi.</p>
        @endif
      </div>
    </div>

    {{-- ===== STRUKTUR ORGANISASI ===== --}}
    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-4" data-aos="fade-up" data-aos-delay="200">
      <div class="relative">
        <img src="{{ asset('storage/beranda/gedungsmp2.png') }}"
          class="w-full h-[150px] object-cover object-center"
          alt="Struktur Organisasi">
        <div class="absolute inset-0 flex items-center justify-center" style="background-color: rgba(6,78,59,0.65);">
          <h2 class="text-3xl font-bold text-white">Struktur Organisasi</h2>
        </div>
      </div>
      <div class="p-6">
        @if ($profil && $profil->image)
        <img src="{{ asset('storage/' . $profil->image) }}"
          class="w-full rounded-lg"
          alt="Struktur Organisasi SMP Islam Al-Azhar 17">
        @else
        <p class="text-gray-400 text-center py-4">Belum ada gambar struktur organisasi.</p>
        @endif
      </div>
    </div>

  </div>
</section>

@endsection