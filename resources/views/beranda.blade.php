<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SMP Islam Al-Azhar 17 Pontianak</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>

body{
font-family:'Poppins',sans-serif;
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

<ul class="flex gap-10 text-white font-semibold">

<li class="hover:text-yellow-300 cursor-pointer">Beranda</li>
<li class="hover:text-yellow-300 cursor-pointer">Profil Kami</li>
<li class="hover:text-yellow-300 cursor-pointer">Fasilitas</li>
<li class="hover:text-yellow-300 cursor-pointer">Berita</li>
<li class="hover:text-yellow-300 cursor-pointer">PPDB</li>

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



<!-- SAMBUTAN -->

<div class="max-w-6xl mx-auto -mt-24 relative z-10 px-4">

<div class="bg-gray-200 rounded-xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between gap-8">

<div class="flex items-center gap-6">

<img src="{{ asset('images/kepsek.jpg') }}"
class="w-24 h-24 rounded-full object-cover">

<div>

<h3 class="text-xl font-bold">
Sambutan Kepala Sekolah
</h3>

<h4 class="font-semibold">
Dede Hernadi, S.T.
</h4>

<p class="text-gray-700 text-sm mt-2 max-w-md">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text.
</p>

<a href="#" class="text-gray-500 text-sm mt-2 inline-block">
Selengkapnya >
</a>

</div>

</div>


<div class="flex gap-16 text-center">

<div>
<img src="{{ asset('images/icon-siswa.png') }}" class="w-10 mx-auto mb-2">
<p class="text-xl font-bold">122</p>
<p class="text-gray-600 text-sm">Siswa Aktif</p>
</div>

<div>
<img src="{{ asset('images/icon-guru.png') }}" class="w-10 mx-auto mb-2">
<p class="text-xl font-bold">23</p>
<p class="text-gray-600 text-sm">Karyawan & Pengajar</p>
</div>

</div>

</div>

</div>

</section>



<!-- AGENDA SEKOLAH -->

<style>

.swiper-button-next,
.swiper-button-prev{
background:white;
width:50px;
height:50px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:#16a34a;
position:absolute;
top:50%;
transform:translateY(-50%);
z-index:10;
}

/* geser keluar card */
.swiper-button-prev{
left:-25px;
}

.swiper-button-next{
right:-25px;
}

.swiper-button-next::after,
.swiper-button-prev::after{
display:none;
}

/* titik pagination di bawah card */
.swiper-pagination{
position:relative;
margin-top:30px;
}

.line-clamp-2{
display:-webkit-box;
-webkit-line-clamp:2;
-webkit-box-orient:vertical;
overflow:hidden;
}

.line-clamp-3{
display:-webkit-box;
-webkit-line-clamp:3;
-webkit-box-orient:vertical;
overflow:hidden;
}

</style>

<section class="text-center py-16 text-white">

<h2 class="text-3xl font-bold mb-10">
Agenda Sekolah
</h2>

<div class="max-w-6xl mx-auto px-16 relative">  

<div class="swiper agendaSwiper relative">

<div class="swiper-wrapper">


<!-- CARD 1 -->

<div class="swiper-slide flex">

<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left w-full h-[420px] flex flex-col">

<img src="{{ asset('images/agenda1.jpg') }}"
class="w-full h-48 object-cover">

<div class="p-5 flex flex-col flex-1">

<p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>

<h3 class="text-lg font-bold mb-2 line-clamp-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm line-clamp-3 flex-grow">
Kegiatan pesantren kilat untuk meningkatkan pemahaman agama
dan kebersamaan siswa.
</p>

<a href="#" class="mt-4 bg-green-600 text-white px-5 py-2 rounded-full w-fit">
Selengkapnya >
</a>

</div>

</div>

</div>


<!-- CARD 2 -->

<div class="swiper-slide flex">

<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left w-full h-[420px] flex flex-col">

<img src="{{ asset('images/agenda1.jpg') }}"
class="w-full h-48 object-cover">

<div class="p-5 flex flex-col flex-1">

<p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>

<h3 class="text-lg font-bold mb-2 line-clamp-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm line-clamp-3 flex-grow">
Kegiatan pesantren kilat untuk meningkatkan pemahaman agama
dan kebersamaan siswa.
</p>

<a href="#" class="mt-4 bg-green-600 text-white px-5 py-2 rounded-full w-fit">
Selengkapnya >
</a>

</div>

</div>

</div>


<!-- CARD 3 -->

<div class="swiper-slide flex">

<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left w-full h-[420px] flex flex-col">

<img src="{{ asset('images/agenda1.jpg') }}"
class="w-full h-48 object-cover">

<div class="p-5 flex flex-col flex-1">

<p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>

<h3 class="text-lg font-bold mb-2 line-clamp-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm line-clamp-3 flex-grow">
Kegiatan pesantren kilat untuk meningkatkan pemahaman agama
dan kebersamaan siswa.
</p>

<a href="#" class="mt-4 bg-green-600 text-white px-5 py-2 rounded-full w-fit">
Selengkapnya >
</a>

</div>

</div>

</div>

<!-- CARD 4 -->

<div class="swiper-slide flex">

<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left w-full h-[420px] flex flex-col">

<img src="{{ asset('images/agenda1.jpg') }}"
class="w-full h-48 object-cover">

<div class="p-5 flex flex-col flex-1">

<p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>

<h3 class="text-lg font-bold mb-2 line-clamp-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm line-clamp-3 flex-grow">
Kegiatan pesantren kilat untuk meningkatkan pemahaman agama
dan kebersamaan siswa.
</p>

<a href="#" class="mt-4 bg-green-600 text-white px-5 py-2 rounded-full w-fit">
Selengkapnya >
</a>

</div>

</div>

</div>


<!-- CARD 5 -->

<div class="swiper-slide flex">

<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left w-full h-[420px] flex flex-col">

<img src="{{ asset('images/agenda1.jpg') }}"
class="w-full h-48 object-cover">

<div class="p-5 flex flex-col flex-1">

<p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>

<h3 class="text-lg font-bold mb-2 line-clamp-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm line-clamp-3 flex-grow">
Kegiatan pesantren kilat untuk meningkatkan pemahaman agama
dan kebersamaan siswa.
</p>

<a href="#" class="mt-4 bg-green-600 text-white px-5 py-2 rounded-full w-fit">
Selengkapnya >
</a>

</div>

</div>

</div>

<!-- CARD 6 -->

<div class="swiper-slide flex">

<div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg text-left w-full h-[420px] flex flex-col">

<img src="{{ asset('images/agenda1.jpg') }}"
class="w-full h-48 object-cover">

<div class="p-5 flex flex-col flex-1">

<p class="text-sm text-gray-600 mb-2">20 Juni 2026</p>

<h3 class="text-lg font-bold mb-2 line-clamp-2">
Kegiatan Pesantren Kilat
</h3>

<p class="text-gray-700 text-sm line-clamp-3 flex-grow">
Kegiatan pesantren kilat untuk meningkatkan pemahaman agama
dan kebersamaan siswa.
</p>

<a href="#" class="mt-4 bg-green-600 text-white px-5 py-2 rounded-full w-fit">
Selengkapnya >
</a>

</div>

</div>

</div>

<!-- CARD 4 5 6 tetap sama struktur agenda-card -->

</div>

<!--Panah-->
<div class="swiper-button-prev">
<i class="fa-solid fa-chevron-left"></i>
</div>

<div class="swiper-button-next">
<i class="fa-solid fa-chevron-right"></i>
</div>

<!-- TITIK -->
<div class="swiper-pagination"></div>

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

<img src="{{ asset('prestasi1.jpg') }}" class="w-[120px] rounded-lg">

<div>
<h4 class="font-bold">Juara 1 Lomba</h4>
<p>Prestasi siswa dalam lomba tingkat kota.</p>
</div>

</div>


<div class="bg-white rounded-lg p-4 flex gap-4">

<img src="{{ asset('prestasi2.jpg') }}" class="w-[120px] rounded-lg">

<div>
<h4 class="font-bold">Juara 2 Lomba</h4>
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

<img src="{{ asset('berita1.jpg') }}" class="rounded-lg mb-3">

<h4 class="font-bold">Judul Berita</h4>

<p>Deskripsi berita singkat...</p>

<button class="bg-yellow-400 px-4 py-1 rounded mt-3">
Baca Selengkapnya
</button>

</div>


<div class="bg-gray-100 p-4 rounded-lg">

<img src="{{ asset('berita2.jpg') }}" class="rounded-lg mb-3">

<h4 class="font-bold">Judul Berita</h4>

<p>Deskripsi berita singkat...</p>

<button class="bg-yellow-400 px-4 py-1 rounded mt-3">
Baca Selengkapnya
</button>

</div>


<div class="bg-gray-100 p-4 rounded-lg">

<img src="{{ asset('berita3.jpg') }}" class="rounded-lg mb-3">

<h4 class="font-bold">Judul Berita</h4>

<p>Deskripsi berita singkat...</p>

<button class="bg-yellow-400 px-4 py-1 rounded mt-3">
Baca Selengkapnya
</button>

</div>

</div>

</div>

</section>


<!-- FOOTER -->

<footer class="bg-green-900 text-white py-8">

<div class="max-w-6xl mx-auto flex justify-between px-4">

<div>
<img src="{{ asset('logo.png') }}" class="w-10">
<p>SMP Islam Al-Azhar 17 Pontianak</p>
</div>

<div>
<p class="font-bold">Kontak Kami</p>
<p>+628xxxxxxx</p>
<p>smpalazhar17@gmail.com</p>
</div>

</div>

</footer>



<!-- SWIPER JS -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>

const swiper = new Swiper('.agendaSwiper', {

loop:true,

slidesPerView:3,
spaceBetween:30,

autoplay:{
delay:4000,
disableOnInteraction:false
},

navigation:{
nextEl:'.swiper-button-next',
prevEl:'.swiper-button-prev',
},

pagination:{
el:'.swiper-pagination',
clickable:true
},

breakpoints:{

0:{
slidesPerView:1
},

768:{
slidesPerView:2
},

1024:{
slidesPerView:3
}

}

});

</script>

</body>
</html>