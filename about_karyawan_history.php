<?php
    include 'koneksi.php';
    session_start();
    if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
      echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Sirukam | About Sejarah</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="dashboard">
        <p>Dashboard</p>
      </div>
      <a href="home_karyawan.php">Home</a>
      <a href="data_karyawan_spk_alternatif.php">Data SPK</a>
      <a class="active" href="about_karyawan_spk.php">About</a>
      <hr>
      <div class="logout">
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <div class="content">
      <div class="head">
        <h1>About Sistem Pendukung Keputusan</b></h1>
        <hr>
      </div>
      <div class="cards">
        <h2>About</h2><hr>
        <div class="sub-header">
          <div class="tombol1">
            <p><a href="about_karyawan_spk.php">Sistem Pendukung Keputusan</a></p>
          </div>
          <div class="tombol2">
            <p><a href="about_karyawan_wp.php">Weight Product</a></p>
          </div>
          <div class="tombol3">
            <p><a href="about_karyawan_history.php">Sejarah</a></p>
          </div>
          <div class="tombol4">
            <p><a href="about_karyawan_struktur_organisasi.php">Struktur Organisasi</a></p>
          </div>
        </div>
        <hr>
        <h3>PT. Sirukam</h3>
        <h4>Sejarah Perusahaan</h4>
        <p class="konten">
          PT Sirukam yang beralamat di Sirukam, Kecamatan Payung Sekaki, perusahaan ini didirikan pada tahun 10 maret 2018, oleh Bapak Budi Budar yang merupakan presiden direktur di PT tersebut. Bapak Budi Budar merupakan lulusan fakultas ekonomi  di Universitas Indonesia (UI) di Jakarta pada tahun 1998, beliau juga berpengalaman di pasar modal indonesia selama 21 tahun dimulai dari tahun 1998 dan masih aktif hingga sekarang, dengan didirikannya perusahaan ini, beliau bertekat untuk mengembangkan dan memberdayakan  potensi pertenakan yang ada di sumatera barat, dengan berkolaborasi dengan masyarakat dan pemerintah setempat bertujuan untuk meningkatkan ekonomi daerah dan meningkatkan pendapatan masyarakat.
        </p>
        <h4>Visi</h4>
        <p class="konten">
          Visi dari perusahaan PT. Sirukam ini adalah, Menjadi perusahaan yang profesional dengan menghasilkan produk terbaik bagi pelanggan. Hasil terbaik untuk lingkungan dan orang banyak.
        </p>
        <h4>Misi</h4>
        <p class="konten">
          Misi dari Perusahaan PT. Sirukam ini adalah, Memberikan produk terbaik dengan harga kompetitif dan memperbaiki nutrisi masyarakat. Menjadi perusahaan dengan integritas tinggi dan menjunjung tinggi nilai kejujuran.
        </p>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>