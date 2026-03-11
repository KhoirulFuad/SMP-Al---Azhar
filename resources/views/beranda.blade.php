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

<h2 class="text-3xl font-bold">
Agenda Sekolah
</h2>

<div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 mt-10 px-4">


<!-- CARD -->
<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left">

<img src="{{ asset('images/agenda1.jpg') }}" 
class="w-full h-52 object-cover">

<div class="p-5">

<p class="text-sm text-gray-600 mb-2">
20 Juni 2026
</p>

<h3 class="text-xl font-bold mb-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm">
SMP Islam Al-Azhar 17 Pontianak mengadakan kegiatan pesantren kilat
untuk meningkatkan pemahaman agama dan kebersamaan siswa.
</p>

<a href="#" 
class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">
Selengkapnya >
</a>

</div>

</div>


<!-- CARD -->
<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left">

<img src="{{ asset('images/agenda2.jpg') }}" 
class="w-full h-52 object-cover">

<div class="p-5">

<p class="text-sm text-gray-600 mb-2">
18 Juni 2026
</p>

<h3 class="text-xl font-bold mb-2">
Lomba Kebersihan Kelas
</h3>

<p class="text-gray-700 text-sm">
Sekolah mengadakan lomba kebersihan kelas yang diikuti seluruh siswa
sebagai bentuk pembiasaan menjaga lingkungan.
</p>

<a href="#" 
class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">
Selengkapnya >
</a>

</div>

</div>


<!-- CARD -->
<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left">

<img src="{{ asset('images/agenda3.jpg') }}" 
class="w-full h-52 object-cover">

<div class="p-5">

<p class="text-sm text-gray-600 mb-2">
15 Juni 2026
</p>

<h3 class="text-xl font-bold mb-2">
Kegiatan Bakti Sosial
</h3>

<p class="text-gray-700 text-sm">
Kegiatan bakti sosial dilakukan oleh siswa dan guru untuk
membantu masyarakat sekitar serta menanamkan nilai kepedulian.
</p>

<a href="#" 
class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700">
Selengkapnya >
</a>

</div>

</div>


</div>

</section>


<!-- PRESTASI -->
<section class="py-16 bg-green-700">

<div class="max-w-6xl mx-auto px-4">

<h2 class="text-3xl font-bold mb-8 text-white">
Prestasi Kami
</h2>

<div class="grid md:grid-cols-2 gap-6">

<div class="bg-white rounded-lg p-4 flex gap-4">

<img src="{{ asset('prestasi1.jpg') }}" 
class="w-[120px] rounded-lg">

<div>
<h4 class="font-bold">
Juara 1 Lomba
</h4>
<p>Prestasi siswa dalam lomba tingkat kota.</p>
</div>

</div>


<div class="bg-white rounded-lg p-4 flex gap-4">

<img src="{{ asset('prestasi2.jpg') }}" 
class="w-[120px] rounded-lg">

<div>
<h4 class="font-bold">
Juara 2 Lomba
</h4>
<p>Prestasi siswa dalam lomba tingkat provinsi.</p>
</div>

</div>

</div>

</div>

</section>


<!-- BERITA -->
<section class="bg-white py-16">

<div class="max-w-6xl mx-auto px-4">

<h2 class="text-3xl font-bold mb-8">
Berita Terkini
</h2>

<div class="grid md:grid-cols-3 gap-6">

<div class="bg-gray-100 p-4 rounded-lg">

<img src="{{ asset('berita1.jpg') }}" 
class="rounded-lg mb-3">

<h4 class="font-bold">
Judul Berita
</h4>

<p>Deskripsi berita singkat...</p>

<button class="bg-yellow-400 px-4 py-1 rounded mt-3">
Baca Selengkapnya
</button>

</div>


<div class="bg-gray-100 p-4 rounded-lg">

<img src="{{ asset('berita2.jpg') }}" 
class="rounded-lg mb-3">

<h4 class="font-bold">
Judul Berita
</h4>

<p>Deskripsi berita singkat...</p>

<button class="bg-yellow-400 px-4 py-1 rounded mt-3">
Baca Selengkapnya
</button>

</div>


<div class="bg-gray-100 p-4 rounded-lg">

<img src="{{ asset('berita3.jpg') }}" 
class="rounded-lg mb-3">

<h4 class="font-bold">
Judul Berita
</h4>

<p>Deskripsi berita singkat...</p>

<button class="bg-yellow-400 px-4 py-1 rounded mt-3">
Baca Selengkapnya
</button>

</div>

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