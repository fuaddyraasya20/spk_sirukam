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
    <title>PT. Sirukam | About</title>
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
      <a href="home_pimpinan.php">Home</a>
      <a href="data_pimpinan_user.php">Data User</a>
      <a href="data_pimpinan_alternatif.php">Data SPK</a>
      <a class="active" href="about_spk.php">About</a>
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
            <p><a href="about_spk.php">Sistem Pendukung Keputusan</a></p>
          </div>
          <div class="tombol2">
            <p><a href="about_wp.php">Weight Product</a></p>
          </div>
          <div class="tombol3">
            <p><a href="about_history.php">Sejarah</a></p>
          </div>
          <div class="tombol4">
            <p><a href="about_struktur_organisasi.php">Struktur Organisasi</a></p>
          </div>
        </div>
        <hr>
        <h3>Metode <i>Weight Product</i></h3>
        <h4>Apa itu Metode <i>Weight Product</i> ?</h4>
        <p class="konten">
          Weigthed Product (WP) adalah salah satu metode penyelesaian pada sistem pendukung keputusan
        </p>
        <h4>Apa Konsep Dasar dari Metode <i>Weight Product</i> ?</h4>
        <p class="konten">
          1. Metode untuk menyelesaikan masalah Multi Attribute Decision Making (MADM) yang menggunakan rating attribut, setiap atribut harus dipangkatkan dulu dengan bobot atribut yang bersangkutan ."(Roy Agung Hutagaol,2019)"<br><br>
          2. Metode <i>Weight Product</i> mengenal adanya 2 (dua) Variabel, yaitu Variabel Benefit dan Cost.
        </p>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>