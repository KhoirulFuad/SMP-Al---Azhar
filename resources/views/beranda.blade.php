<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMP Islam Al-Azhar 17</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body{
font-family:Poppins;
}
</style>

</head>

<body class="bg-green-700">

<!-- NAVBAR -->
<header class="bg-green-700 py-3">
<div class="max-w-6xl mx-auto flex items-center justify-between px-4">

  <!-- Logo -->
  <div class="flex items-center gap-2 flex-shrink-0">
    <img src="{{ asset('images/logo.jpg') }}" class="w-10 h-10 rounded-full object-cover">
    <img src="{{ asset('images/tulisan al azhar.png') }}" class="h-8">
  </div>

  <!-- Nav Menu -->
  <nav class="flex-1 flex justify-center">
    <ul class="flex gap-8 text-white text-sm font-semibold">
      <li class="cursor-pointer hover:text-yellow-300 transition-colors">Beranda</li>
      <li class="cursor-pointer hover:text-yellow-300 transition-colors">Profil Kami</li>
      <li class="cursor-pointer hover:text-yellow-300 transition-colors">Prestasi</li>
      <li class="cursor-pointer hover:text-yellow-300 transition-colors">Berita</li>
      <li class="cursor-pointer hover:text-yellow-300 transition-colors">PMB</li>
    </ul>
  </nav>

  <!-- Sosial Media -->
  <div class="flex items-center gap-4 flex-shrink-0">

    <!-- WhatsApp -->
    <a href="#" class="text-white hover:text-yellow-300 transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
      </svg>
    </a>

    <!-- Facebook -->
    <a href="#" class="text-white hover:text-yellow-300 transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
      </svg>
    </a>

    <!-- Instagram -->
    <a href="#" class="text-white hover:text-yellow-300 transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
      </svg>
    </a>

  </div>

</div>
</header>


<!-- HERO -->
<section class="relative">

  <img src="{{ asset('images/depan_sekolah.jpg') }}" 
  class="w-full h-[550px] object-cover">

  <div class="absolute inset-0 bg-black/20"></div>

  <div class="max-w-4xl mx-auto -mt-24 relative z-10 px-4 pb-8">

    <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-between gap-6">

      <!-- Kiri: Foto + Teks -->
      <div class="flex items-center gap-5">

        <img src="{{ asset('images/kepsek.jpg') }}" 
        class="w-40 h-40 rounded-full object-cover flex-shrink-0">

        <div>
          <h3 class="font-bold text-lg leading-tight">
            Sambutan Kepala Sekolah
          </h3>

          <p class="font-semibold text-sm mt-0.5">Dede Hernadi, S.T.</p>

          <p class="text-sm text-gray-500 mt-1 leading-relaxed max-w-xs">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy.
          </p>

          <a href="#" class="text-sm text-gray-600 mt-2 inline-block hover:text-green-700">
            Selengkapnya &rsaquo;
          </a>
        </div>

      </div>

      <!-- Kanan: Statistik -->
      <div class="flex gap-8 flex-shrink-0 pr-2">

        <div class="flex flex-col items-center gap-1">
          <!-- Ikon Siswa -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0121 17.25c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 013 17.25c0-2.042.897-3.878 2.34-5.172L12 14z"/>
          </svg>
          <span class="text-2xl font-bold text-gray-800">122</span>
          <span class="text-xs text-gray-500">Siswa Aktif</span>
        </div>

        <div class="flex flex-col items-center gap-1">
          <!-- Ikon Karyawan -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
          </svg>
          <span class="text-2xl font-bold text-gray-800">23</span>
          <span class="text-xs text-gray-500">Karyawan & Pengajar</span>
        </div>

      </div>

    </div>

  </div>

</section>


<!-- AGENDA SEKOLAH -->
<section class="text-center py-16 text-white">

  <h2 class="text-3xl font-bold mb-10">Agenda Sekolah</h2>

  <!-- Carousel Wrapper -->
  <div class="relative max-w-6xl mx-auto px-12">

    <!-- Tombol Kiri -->
    <button onclick="slideAgenda(-1)" 
    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white text-green-700 rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-green-100 transition text-3xl font-bold">
      &#8249;
    </button>

    <!-- Tombol Kanan -->
    <button onclick="slideAgenda(1)" 
    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white text-green-700 rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-green-100 transition text-3xl font-bold">
      &#8250;
    </button>

    <!-- Viewport -->
    <div class="overflow-hidden">
      <div id="agendaTrack" class="flex transition-transform duration-500 ease-in-out" style="gap: 24px;">

        <!-- CARD 1 -->
        <div style="min-width: calc((100% - 48px) / 3); max-width: calc((100% - 48px) / 3);" class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left flex-shrink-0">
          <img src="{{ asset('images/pkilat.jpg') }}" class="w-full h-52 object-cover">
          <div class="p-5">
            <p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>
            <h3 class="text-xl font-bold mb-2 text-gray-800">Kegiatan Pesantren Kilat</h3>
            <p class="text-gray-700 text-sm">SMP Islam Al-Azhar 17 Pontianak mengadakan kegiatan pesantren kilat untuk meningkatkan pemahaman agama dan kebersamaan siswa.</p>
            <a href="#" class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">Selengkapnya ></a>
          </div>
        </div>

        <!-- CARD 2 -->
        <div style="min-width: calc((100% - 48px) / 3); max-width: calc((100% - 48px) / 3);" class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left flex-shrink-0">
          <img src="{{ asset('images/agenda2.jpg') }}" class="w-full h-52 object-cover">
          <div class="p-5">
            <p class="text-sm text-gray-600 mb-2">18 Juni 2026</p>
            <h3 class="text-xl font-bold mb-2 text-gray-800">Lomba Kebersihan Kelas</h3>
            <p class="text-gray-700 text-sm">Sekolah mengadakan lomba kebersihan kelas yang diikuti seluruh siswa sebagai bentuk pembiasaan menjaga lingkungan.</p>
            <a href="#" class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">Selengkapnya ></a>
          </div>
        </div>

        <!-- CARD 3 -->
        <div style="min-width: calc((100% - 48px) / 3); max-width: calc((100% - 48px) / 3);" class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left flex-shrink-0">
          <img src="{{ asset('images/agenda3.jpg') }}" class="w-full h-52 object-cover">
          <div class="p-5">
            <p class="text-sm text-gray-600 mb-2">15 Juni 2026</p>
            <h3 class="text-xl font-bold mb-2 text-gray-800">Kegiatan Bakti Sosial</h3>
            <p class="text-gray-700 text-sm">Kegiatan bakti sosial dilakukan oleh siswa dan guru untuk membantu masyarakat sekitar serta menanamkan nilai kepedulian.</p>
            <a href="#" class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">Selengkapnya ></a>
          </div>
        </div>

        <!-- CARD 4 -->
        <div style="min-width: calc((100% - 48px) / 3); max-width: calc((100% - 48px) / 3);" class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left flex-shrink-0">
          <img src="{{ asset('images/agenda4.jpg') }}" class="w-full h-52 object-cover">
          <div class="p-5">
            <p class="text-sm text-gray-600 mb-2">10 Juni 2026</p>
            <h3 class="text-xl font-bold mb-2 text-gray-800">Class Meeting</h3>
            <p class="text-gray-700 text-sm">Kegiatan class meeting diadakan setelah ujian sebagai sarana pengembangan bakat dan mempererat hubungan antar siswa.</p>
            <a href="#" class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">Selengkapnya ></a>
          </div>
        </div>

      </div>
    </div>

    <!-- Dots -->
    <div class="flex justify-center gap-2 mt-6" id="agendaDots"></div>

  </div>

</section>

<script>
  const track = document.getElementById('agendaTrack');
  const gap = 24;
  let current = 0;
  let autoSlideInterval;

  const totalCards = track.children.length;
  const visibleCount = 3;
  const totalSlides = totalCards - visibleCount + 1;

  // Buat dots
  const dotsContainer = document.getElementById('agendaDots');
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('button');
    dot.className = 'w-2.5 h-2.5 rounded-full transition-colors ' + (i === 0 ? 'bg-white' : 'bg-white/40');
    dot.onclick = () => { goToSlide(i); resetAutoSlide(); };
    dotsContainer.appendChild(dot);
  }

  function updateDots() {
    Array.from(dotsContainer.children).forEach((dot, i) => {
      dot.className = 'w-2.5 h-2.5 rounded-full transition-colors ' + (i === current ? 'bg-white' : 'bg-white/40');
    });
  }

  function goToSlide(index) {
    current = index;
    const cardWidth = track.children[0].offsetWidth + gap;
    track.style.transform = `translateX(-${current * cardWidth}px)`;
    updateDots();
  }

  function slideAgenda(dir) {
    current += dir;
    if (current < 0) current = totalSlides - 1;
    if (current >= totalSlides) current = 0;
    goToSlide(current);
    resetAutoSlide();
  }

  function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(() => slideAgenda(1), 4000);
  }

  resetAutoSlide();
</script>


<!-- PRESTASI -->
<section class="py-20 bg-white overflow-hidden">

  <div class="max-w-6xl mx-auto px-4 flex gap-8 items-center">

    <!-- Kiri: Konten Prestasi -->
    <div class="flex-1">

      <h2 class="text-3xl font-bold mb-8 text-gray-800">
        Prestasi Kami
      </h2>

      <!-- Card Prestasi 1 -->
      <div class="bg-white rounded-xl shadow-md p-4 flex gap-4 items-center mb-4 border border-gray-100">
        <img src="{{ asset('images/sekolah.jpg') }}" 
        class="w-[140px] h-[100px] rounded-lg object-cover flex-shrink-0">
        <p class="text-gray-600 text-sm leading-relaxed">
          Contrary to popular belief, Lorem Ipsum is not simply random text. 
          It has roots in a piece of classical Latin literature from 45 BC, 
          making it over 2000 years old.
        </p>
      </div>

      <!-- Card Prestasi 2 -->
      <div class="bg-white rounded-xl shadow-md p-4 flex gap-4 items-center mb-8 border border-gray-100">
        <img src="{{ asset('images/prestasi2.jpg') }}" 
        class="w-[140px] h-[100px] rounded-lg object-cover flex-shrink-0">
        <p class="text-gray-600 text-sm leading-relaxed">
          Contrary to popular belief, Lorem Ipsum is not simply random text. 
          It has roots in a piece of classical Latin literature from 45 BC, 
          making it over 2000 years old.
        </p>
      </div>

      <!-- Tombol -->
      <div class="flex justify-center">
        <a href="#" class="border-2 border-green-600 text-green-700 font-semibold px-8 py-2 rounded-lg hover:bg-green-600 hover:text-white transition-colors flex items-center gap-2">
          Lihat Selengkapnya 
          <span>&rsaquo;</span>
        </a>
      </div>

    </div>

    <div class="relative w-[380px] h-[420px] flex-shrink-0 hidden md:flex items-center justify-center">

        <!-- Lingkaran hijau besar -->
        <div class="absolute -bottom-8 -right-12 w-64 h-64 bg-green-500 rounded-full z-0 flex items-center justify-center">

            <!-- Circle kuning di tengah hijau -->
            <div class="w-56 h-56 bg-yellow-400 rounded-full"></div>

        </div>

        <!-- Gambar maskot -->
        <img src="{{ asset('images/backgroundsiswa.png') }}" 
        class="absolute z-10 h-[400px] w-auto object-contain">

        <!-- Lingkaran kuning depan -->
        <div class="absolute -bottom-20 right-14 w-48 h-48 bg-green-600 rounded-full z-20 flex items-center justify-center">

            <!-- Circle kecil di tengah -->
            <div class="w-40 h-40 bg-yellow-400 rounded-full"></div>

        </div>

    </div>

  </div>

</section>


<!-- BERITA -->
<section class="bg-white py-16">

  <div class="max-w-6xl mx-auto px-4">

    <h2 class="text-3xl font-bold mb-8">Berita Terkini</h2>

    <div class="grid md:grid-cols-3 gap-6">

      <!-- CARD 1 -->
      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
        <img src="{{ asset('images/berita1.jpg') }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <p class="text-xs text-gray-400 mb-1">Tanggal Berita</p>
          <h4 class="font-bold text-gray-800 mb-2">Judul Berita</h4>
          <p class="text-gray-600 text-sm mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">Selengkapnya &rsaquo;</a>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
        <img src="{{ asset('images/berita2.jpg') }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <p class="text-xs text-gray-400 mb-1">Tanggal Berita</p>
          <h4 class="font-bold text-gray-800 mb-2">Judul Berita</h4>
          <p class="text-gray-600 text-sm mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">Selengkapnya &rsaquo;</a>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
        <img src="{{ asset('images/berita3.jpg') }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <p class="text-xs text-gray-400 mb-1">Tanggal Berita</p>
          <h4 class="font-bold text-gray-800 mb-2">Judul Berita</h4>
          <p class="text-gray-600 text-sm mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">Selengkapnya &rsaquo;</a>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
        <img src="{{ asset('images/berita4.jpg') }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <p class="text-xs text-gray-400 mb-1">Tanggal Berita</p>
          <h4 class="font-bold text-gray-800 mb-2">Judul Berita</h4>
          <p class="text-gray-600 text-sm mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">Selengkapnya &rsaquo;</a>
        </div>
      </div>

      <!-- CARD 5 -->
      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
        <img src="{{ asset('images/berita5.jpg') }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <p class="text-xs text-gray-400 mb-1">Tanggal Berita</p>
          <h4 class="font-bold text-gray-800 mb-2">Judul Berita</h4>
          <p class="text-gray-600 text-sm mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">Selengkapnya &rsaquo;</a>
        </div>
      </div>

      <!-- CARD 6 -->
      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
        <img src="{{ asset('images/berita6.jpg') }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <p class="text-xs text-gray-400 mb-1">Tanggal Berita</p>
          <h4 class="font-bold text-gray-800 mb-2">Judul Berita</h4>
          <p class="text-gray-600 text-sm mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="inline-block bg-green-600 text-white text-sm px-4 py-1.5 rounded-full hover:bg-green-700">Selengkapnya &rsaquo;</a>
        </div>
      </div>

    </div>

    <!-- Tombol -->
    <div class="flex justify-center mt-10">
      <a href="" 
      class="border-2 border-green-600 text-green-700 font-semibold px-10 py-2.5 rounded-lg hover:bg-green-600 hover:text-white flex items-center gap-2">
        Lihat Selengkapnya &rsaquo;
      </a>
    </div>

  </div>

</section>


<!-- MENGAPA -->
<section class="bg-gray-200 py-16 text-center">

<div class="max-w-6xl mx-auto px-4">

<h2 class="text-3xl font-bold">
Mengapa Memilih Kami?
</h2>

<div class="grid md:grid-cols-4 gap-6 mt-8">

<div class="bg-white p-5 rounded-lg">
<h4 class="font-bold">Fasilitas Lengkap</h4>
<p>Sekolah dengan fasilitas modern.</p>
</div>

<div class="bg-white p-5 rounded-lg">
<h4 class="font-bold">Guru Profesional</h4>
<p>Didukung tenaga pengajar berpengalaman.</p>
</div>

<div class="bg-white p-5 rounded-lg">
<h4 class="font-bold">Lingkungan Islami</h4>
<p>Pendidikan berbasis nilai Islam.</p>
</div>

<div class="bg-white p-5 rounded-lg">
<h4 class="font-bold">Prestasi Siswa</h4>
<p>Banyak prestasi akademik maupun non akademik.</p>
</div>

</div>

</div>

</section>


<!-- EKSTRA -->
<section class="py-16 text-center bg-green-700 text-white">

<div class="max-w-6xl mx-auto px-4">

<h2 class="text-3xl font-bold">
Ekstrakurikuler Kami
</h2>

<div class="grid md:grid-cols-3 gap-6 mt-8">

<div>
<img src="{{ asset('basket.jpg') }}" 
class="rounded-lg">
<p class="mt-2">Basket</p>
</div>

<div>
<img src="{{ asset('voli.jpg') }}" 
class="rounded-lg">
<p class="mt-2">Voli</p>
</div>

<div>
<img src="{{ asset('badminton.jpg') }}" 
class="rounded-lg">
<p class="mt-2">Badminton</p>
</div>

</div>

</div>

</section>


<!-- FOOTER -->
<footer class="bg-green-900 text-white py-8">

<div class="max-w-6xl mx-auto flex justify-between px-4">

<div>
<img src="{{ asset('images/logo.jpg') }}" class="w-10">
<p>SMP Islam Al-Azhar 17 Pontianak</p>
</div>

<div>
<p class="font-bold">Kontak Kami</p>
<p>+628xxxxxxx</p>
<p>smpalazhar17@gmail.com</p>
</div>

</div>

</footer>

</body>
</html>