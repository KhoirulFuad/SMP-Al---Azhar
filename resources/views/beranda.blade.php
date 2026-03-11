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
<header class="bg-green-600 py-4">
<div class="max-w-6xl mx-auto flex items-center justify-between px-4">

<div class="flex items-center gap-2">
<img src="{{ asset('images/logo.jpg') }}" class="w-10">
<img src="{{ asset('images/tulisan al azhar.png') }}" class="h-8">
</div>

<nav class="flex-1 flex justify-center">
<ul class="flex gap-10 text-white text-lg font-semibold">
<li class="cursor-pointer hover:text-yellow-300">Beranda</li>
<li class="cursor-pointer hover:text-yellow-300">Profil Kami</li>
<li class="cursor-pointer hover:text-yellow-300">Fasilitas</li>
<li class="cursor-pointer hover:text-yellow-300">Berita</li>
<li class="cursor-pointer hover:text-yellow-300">PPDB</li>
</ul>
</nav>

<div class="w-[120px]"></div>

</div>
</header>


<!-- HERO -->
<section class="relative">

<img src="{{ asset('images/depan_sekolah.jpg') }}" 
class="w-full h-[550px] object-cover">

<div class="absolute inset-0 bg-black/20"></div>

<div class="max-w-4xl mx-auto -mt-24 relative z-10 px-4">

<div class="bg-gray-200 rounded-xl shadow-lg p-6 flex gap-4 items-start">

<img src="{{ asset('images/kepsek.jpg') }}" 
class="w-20 h-20 rounded-full object-cover">

<div>

<h3 class="font-bold text-lg">
Sambutan Kepala Sekolah
</h3>

<p>
Assalamu’alaikum Wr. Wb. Selamat datang di website SMP Islam Al-Azhar 17 Pontianak.
</p>

<div class="flex gap-6 mt-2 text-sm">
<span>122 Siswa Aktif</span>
<span>23 Guru</span>
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