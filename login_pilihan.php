<?php
// Halaman pilihan login Dashboard PLN
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pilihan Login - Dashboard PLN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #0f766e, #06b6d4);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 32px;
    }

    .card {
      background: white;
      width: 100%;
      max-width: 1100px;
      border-radius: 28px;
      padding: 48px 56px;
      box-shadow: 0 30px 60px rgba(0,0,0,0.18);
    }

    /* HEADER */
    .header {
      text-align: center;
      margin-bottom: 48px;
    }

    .header img {
      width: 80px;
      margin-bottom: 16px;
    }

    .header h1 {
      margin: 0;
      font-size: 32px;
      font-weight: 700;
      color: #0f766e;
    }

    .header p {
      margin-top: 10px;
      font-size: 15px;
      color: #475569;
    }

    /* GRID */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 28px;
    }

    /* LOGIN CARD */
    .login-option {
      background: #f9fafb;
      border: 2px solid #e2e8f0;
      border-radius: 22px;
      padding: 32px 24px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .login-option:hover {
      background: #ecfeff;
      border-color: #06b6d4;
      transform: translateY(-6px);
      box-shadow: 0 16px 32px rgba(0,0,0,0.08);
    }

    .icon {
      font-size: 44px;
      margin-bottom: 18px;
    }

    .login-option h3 {
      margin: 0;
      font-size: 18px;
      font-weight: 700;
      color: #0f766e;
    }

    .login-option p {
      margin-top: 8px;
      font-size: 14px;
      color: #64748b;
    }

    /* KHUSUS ITEM TENGAH */
    .center-item {
      grid-column: 1 / -1;
      justify-self: center;
      max-width: 320px;
      width: 100%;
    }

    /* BACK */
    .back {
      margin-top: 48px;
      text-align: center;
    }

    .back a {
      display: inline-block;
      padding: 10px 18px;
      border-radius: 12px;
      background: #f1f5f9;
      color: #0f766e;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .back a:hover {
      background: #e2e8f0;
    }

    /* RESPONSIVE */
    @media (max-width: 640px) {
      .card {
        padding: 32px 24px;
      }

      .header h1 {
        font-size: 26px;
      }

      .center-item {
        max-width: 100%;
      }
    }
  </style>
</head>

<body>

<div class="card">

  <div class="header">
    <img src="Logo_PLN.png" alt="Logo PLN">
    <h1>Pilih Jenis Login</h1>
    <p>Silakan pilih unit kerja untuk masuk ke sistem Dashboard PLN</p>
  </div>

  <div class="grid">

    <div class="login-option" onclick="goLogin('tl_teknik')">
      <div class="icon">🛠️</div>
      <h3>TL TEKNIK</h3>
      <p>Tim Leader Teknik</p>
    </div>

    <div class="login-option" onclick="goLogin('tl_yan_gan')">
      <div class="icon">⚡</div>
      <h3>TL YAN GAN</h3>
      <p>Tim Leader Pelayanan Gangguan</p>
    </div>

    <div class="login-option" onclick="goLogin('tl_te')">
      <div class="icon">🔌</div>
      <h3>TL TE</h3>
      <p>Tim Leader Transmisi Energi</p>
    </div>

    <div class="login-option" onclick="goLogin('tl_k3_kam')">
      <div class="icon">🦺</div>
      <h3>TL K3 DAN KAM</h3>
      <p>Keselamatan & Keamanan Kerja</p>
    </div>

    <div class="login-option" onclick="goLogin('jtc_har')">
      <div class="icon">🏗️</div>
      <h3>JTC HAR</h3>
      <p>Junior Technical Coordinator Harian</p>
    </div>

    <div class="login-option" onclick="goLogin('of_yan_gan')">
      <div class="icon">📞</div>
      <h3>OF YAN GAN</h3>
      <p>Officer Pelayanan Gangguan</p>
    </div>

    <!-- JTE TE TENGAH DI BAWAH -->
    <div class="login-option center-item" onclick="goLogin('jte_te')">
      <div class="icon">⚙️</div>
      <h3>JTE TE</h3>
      <p>Junior Teknik Energi</p>
    </div>

  </div>

  <div class="back">
    <a href="dashboard.php">← Kembali ke Dashboard</a>
  </div>

</div>

<script>
function goLogin(role) {
  window.location.href = "login.php?role=" + role;
}
</script>

</body>
</html>
