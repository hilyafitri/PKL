<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard PLN</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: #f1f5f9;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background: linear-gradient(90deg, #0f766e, #06b6d4);
      color: white;
      padding: 20px 32px;
      border-radius: 0 0 20px 20px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .logo {
      width: 52px;
      height: 52px;
      object-fit: contain;
      background: white;
      border-radius: 12px;
      padding: 6px;
    }

    .header-text h1 {
      margin: 0;
      font-size: 26px;
    }

    .header-text p {
      margin: 4px 0 0;
      opacity: 0.9;
      font-size: 14px;
    }

    .header-right {
      margin-left: auto;
    }

    .login-btn {
      background: white;
      color: #0f766e;
      padding: 10px 18px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .login-btn:hover {
      background: #ecfeff;
      transform: translateY(-2px);
    }

    .container {
      padding: 32px;
      padding-top: 150px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 24px;
    }

    .card {
      background: white;
      border-radius: 20px;
      padding: 24px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .icon {
      font-size: 40px;
      margin-bottom: 16px;
    }

    .card h2 {
      margin: 0;
      font-size: 20px;
    }

    .card p {
      margin: 12px 0 20px;
      color: #475569;
      font-size: 14px;
    }

    .btn {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      background: #0f766e;
      color: white;
      font-size: 14px;
      cursor: pointer;
    }

    .btn:hover {
      background: #115e59;
    }

    footer {
      margin-top: 40px;
      background: #0f766e;
      color: white;
      padding: 32px;
    }

    footer hr {
      border: 1px solid rgba(255,255,255,0.2);
      margin: 24px 0;
    }
  </style>
</head>

<body>

<header>
  <img src="Logo_PLN.png" alt="Logo PLN" class="logo">

  <div class="header-text">
    <h1>Dashboard PLN</h1>
    <p>Monitoring Data Pengusahaan, Evaluasi Kinerja, LM WIG & Program Unggulan</p>
  </div>

  <div class="header-right">
    <a href="login_pilihan.php" class="login-btn">🔐 Login</a>
  </div>
</header>

<div class="container">

  <div class="grid">
    <div class="card">
      <div class="icon">📋</div>
      <h2>Data Pengusahaan</h2>
      <p>Data aset, pelanggan, produksi, dan distribusi tenaga listrik.</p>
      <button class="btn" onclick="openMenu('pengusahaan')">Lihat Data</button>
    </div>

    <div class="card">
      <div class="icon">📊</div>
      <h2>Evaluasi Kinerja</h2>
      <p>Monitoring KPI, realisasi target, dan performa unit kerja.</p>
      <button class="btn" onclick="openMenu('kinerja')">Evaluasi</button>
    </div>

    <div class="card">
      <div class="icon">🎯</div>
      <h2>LM WIG</h2>
      <p>Lead Measure & Wildly Important Goals untuk akselerasi kinerja.</p>
      <button class="btn" onclick="openMenu('wig')">Detail WIG</button>
    </div>

    <div class="card">
      <div class="icon">⭐</div>
      <h2>Program Unggulan</h2>
      <p>Program strategis PLN untuk transformasi dan keberlanjutan.</p>
      <button class="btn" onclick="openMenu('program')">Lihat Program</button>
    </div>
  </div>

  <h2 style="margin-top:40px;">📰 Berita & Update</h2>
  <div class="grid" style="margin-top:16px;">
    <div class="card">
      <h3>Pemeliharaan Jaringan</h3>
      <p>Pemeliharaan jaringan listrik wilayah ULP Gerung dijadwalkan tanggal 20 Januari 2026.</p>
      <small>📅 18 Januari 2026</small>
    </div>

    <div class="card">
      <h3>Program Listrik Desa</h3>
      <p>Percepatan elektrifikasi desa terpencil sebagai bagian Program Unggulan PLN.</p>
      <small>📅 15 Januari 2026</small>
    </div>

    <div class="card">
      <h3>Evaluasi Kinerja Bulanan</h3>
      <p>Realisasi KPI bulan Desember menunjukkan peningkatan keandalan sistem.</p>
      <small>📅 10 Januari 2026</small>
    </div>
  </div>

</div>

<footer>
  <div class="grid">
    <div>
      <h3>📍 Kontak PLN</h3>
      <p>PLN ULP Gerung</p>
      <p>Jl. Raya Gerung, Kabupaten Lombok Barat</p>
      <p>Nusa Tenggara Barat</p>
    </div>

    <div>
      <h3>📞 Contact Person</h3>
      <p>Telepon: (0370) 123456</p>
      <p>Email: ulp.gerung@pln.co.id</p>
      <p>Call Center PLN: 123</p>
    </div>

    <div>
      <h3>⏰ Jam Layanan</h3>
      <p>Senin – Jumat</p>
      <p>08.00 – 16.00 WITA</p>
      <p>Layanan Gangguan: 24 Jam</p>
    </div>
  </div>

  <hr>
  <p style="text-align:center; font-size:14px; opacity:0.9;">
    © 2026 PT PLN (Persero) ULP Gerung. All Rights Reserved.
  </p>
</footer>

<script>
function openMenu(menu) {
  if (menu === 'pengusahaan') {
    window.location.href = 'pengusahaan.php';
  } else if (menu === 'kinerja') {
    window.location.href = 'kinerja.php';
  } else if (menu === 'wig') {
    window.location.href = 'wig.php';
  } else if (menu === 'program') {
    window.location.href = 'program.php';
  }
}
</script>

</body>
</html>
