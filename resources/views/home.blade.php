<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMP ISLAM AL-AZHAR 17 PONTIANAK </title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{background:#1292d2;color:white}

/* NAVBAR */
.navbar{
position:fixed;width:100%;padding:20px 8%;
display:flex;justify-content:space-between;
align-items:center;background:rgba(18, 146, 210, 0.8);
z-index:1000
}
.logo{font-size:24px;font-weight:700}
.logo span{color:#f5a623}
.nav-links{display:flex;gap:30px}
.nav-links a{
text-decoration:none;color:white;font-weight:500;
padding:6px 12px;transition:.3s
}
.nav-links a.active,.nav-links a:hover{
border:2px solid #f5a623;border-radius:4px
}

/* HERO */
.hero{
height:100vh;
background:url('{{ asset("images/sekolah.jpg") }}') center/cover no-repeat;
position:relative;display:flex;align-items:center;padding:0 8%
}
.hero::before{
content:"";position:absolute;width:100%;height:100%;
background:rgba(18, 146, 210, 0.8);top:0;left:0
}
.hero-content{position:relative;max-width:700px}
.hero-content h1{font-size:35px;font-weight:700}
.hero-content h1 span{color:#57d222}
.hero-content p{margin:20px 0;font-size:18px}
.btn{
background:#f5a623;padding:12px 25px;text-decoration:none;
color:white;font-weight:600;border-radius:4px;transition:.3s
}
.btn:hover{background:#d48d1c}

/* FEATURES */
.features{
display:flex;justify-content:center;gap:30px;
padding:60px 8%;background:#0f1c2e
}
.feature-box{
background:#162840;padding:40px;text-align:center;
flex:1;border-radius:6px;transition:.3s
}
.feature-box:hover{
transform:translateY(-10px);background:#1d3458
}

/* ABOUT */
.about{padding:100px 8%;background:#fffff6}
.about h2{text-align:center;margin-bottom:50px;font-size:32px;color: #000000}
.about-container{
display:flex;align-items:center;gap:50px;flex-wrap:wrap
}
.about img{
width:100%;max-width:500px;border-radius:10px
}
.about-text{flex:1}
.about-text h3{font-size:30px;margin-bottom:20px;color: #000000}
.about-text p{line-height:1.8}
.about h4{text-align:center;margin-bottom:50px;font-size:10px;color: #000000}

@media(max-width:900px){
.hero-content h1{font-size:40px}
.features{flex-direction:column}
.about-container{flex-direction:column}
}
</style>
</head>

<body>

<nav class="navbar">
<div class="logo"><span>SMP </span>ISLAM </span>AL-AZHAR </span>PONTIANAK </span>17</div>
<div class="nav-links">
<a href="#" class="active">Home</a>
<a href="#about">Tentang Kami</a>
<a href="#">Mata Pelajaran</a>
<a href="#">Kontak</a>
</div>
</nav>

<section class="hero">
<div class="hero-content">
<p>AYO DAFTARKAN PUTRA PUTRI ANDA DI</p>
<h1><span>SMP </span>ISLAM </span>AL-AZHAR </span>PONTIANAK </span>17</h1>
<p>Karangploso, Kab. Malang</p>
<a href="#" class="btn">Baca Selengkapnya</a>
</div>
</section>

<section class="features">
<div class="feature-box">Kelas Berkualitas</div>
<div class="feature-box">Guru Berkualitas</div>
<div class="feature-box">Fasilitas Lengkap</div>
</section>

<section class="about" id="about">
<h2>Kenapa Memilih SDN 2?</h2>
<div class="about-container">
<img src="{{ asset('images/kelas.jpg') }}" alt="Kelas">
<div class="about-text">
<h3>Edukasi Berkualitas</h3>
<h4>
Berkomitmen untuk memberikan ilmu dan pengetahuan terbaik
serta membentuk karakter anak didik menjadi manusia yang
berguna dan bermanfaat bagi bangsa serta mengembangkan
potensi dan bakat secara optimal.
</h4>
</div>
</div>
</section>

<script>
window.addEventListener("scroll",function(){
const navbar=document.querySelector(".navbar");
navbar.style.background=window.scrollY>50?"#14728380":"rgb(20, 114, 131)";
});
</script>

</body>
</html>