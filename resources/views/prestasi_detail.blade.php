{{-- resources/views/prestasi_detail.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $prestasi->judul }} - SMP Islam Al-Azhar 17</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: Poppins, sans-serif; display: flex; flex-direction: column; min-height: 100vh; }
    .hero-banner { height: 220px; position: relative; overflow: hidden; }
    .hero-banner img { width: 100%; height: 100%; object-fit: cover; object-position: center; }
    .hero-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; }
    .content-wrap { flex: 1; max-width: 860px; margin: 0 auto; padding: 40px 16px; width: 100%; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #15803d; font-size: 14px; font-weight: 600; text-decoration: none; margin-bottom: 24px; }
    .back-link:hover { text-decoration: underline; }
    .article-title { font-size: 24px; font-weight: 700; color: #111827; line-height: 1.4; margin-bottom: 8px; }
    .article-date { font-size: 13px; color: #9ca3af; margin-bottom: 24px; }
    .article-img { width: 100%; max-height: 420px; object-fit: cover; border-radius: 12px; margin-bottom: 28px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); }
    .article-body { font-size: 15px; color: #374151; line-height: 1.8; }
  </style>
</head>

<body class="bg-white">

  <!-- NAVBAR -->
  <header class="bg-green-700 py-3">
    <div class="max-w-6xl mx-auto flex items-center justify-between px-4">

      <div class="flex items-center gap-2 flex-shrink-0">
        <img src="{{ asset('images/logo.jpg') }}" class="w-10 h-10 rounded-full object-cover">
        <img src="{{ asset('images/tulisan al azhar.png') }}" class="h-8">
      </div>

      <nav class="flex-1 flex justify-center">
        <ul class="flex gap-8 text-white text-sm font-semibold" style="list-style:none; margin:0; padding:0;">
          <li><a href="/" class="hover:text-yellow-300 transition-colors" style="text-decoration:none; color:inherit;">Beranda</a></li>
          <li><a href="/profil" class="hover:text-yellow-300 transition-colors" style="text-decoration:none; color:inherit;">Profil Kami</a></li>
          <li><a href="/prestasi" style="text-decoration:none; color:#fde047;">Prestasi</a></li>
          <li><a href="/berita" class="hover:text-yellow-300 transition-colors" style="text-decoration:none; color:inherit;">Berita</a></li>
          <li><a href="/pmb" class="hover:text-yellow-300 transition-colors" style="text-decoration:none; color:inherit;">PMB</a></li>
        </ul>
      </nav>

      <div class="flex items-center gap-4 flex-shrink-0">
        <a href="#" class="text-white hover:text-yellow-300 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>
        <a href="#" class="text-white hover:text-yellow-300 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
        <a href="#" class="text-white hover:text-yellow-300 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
        </a>
      </div>
    </div>
  </header>

  <!-- HERO BANNER -->
  <div class="hero-banner">
    <img src="{{ asset('images/depan_sekolah.jpg') }}" alt="Sekolah">
    <div class="hero-overlay">
      <h1 style="color:#fff; font-size:36px; font-weight:700; letter-spacing:6px; margin:0;">PRESTASI</h1>
    </div>
  </div>

  <!-- KONTEN DETAIL -->
  <div class="content-wrap">

    <a href="/prestasi" class="back-link">&#8592; Kembali ke Prestasi</a>

    <h1 class="article-title">{{ $prestasi->judul }}</h1>

    <p class="article-date">{{ \Carbon\Carbon::parse($prestasi->tanggal)->translatedFormat('d F Y') }}</p>

    @if ($prestasi->gambar)
      <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->judul }}" class="article-img">
    @endif

    <div class="article-body">
      {!! nl2br(e($prestasi->deskripsi)) !!}
    </div>

  </div>

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