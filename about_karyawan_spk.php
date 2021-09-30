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
    <title>PT. Sirukam | About SPK</title>
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
        <h3>Sistem Pendukung Keputusan</h3>
        <h4>Apa itu Sistem Pendukung Keputusan ?</h4>
        <p class="konten">
          Sistem Pendukung Keputusan (SPK) dibangun untuk mendukung solusi atas suatu masalah atau untuk suatu peluang serta digunakan untuk pengambilan suatu keputusan.<br><br>
          Konsep sistem pendukung keputusan pertama kali diperkenalkan pada awal tahun 1970-an oleh Michael S. Scoott Morton dengan istilah Management Decision System. Sistem tersebut adalah sistem berbasis komputer yang bertujuan membantu mengambil keputusan dalam memanfaatkan data dan model tertentu, untuk memecahkan berbagai persoalan yang tidak teratur.
        </p>
        <h4>Apa Tujuan Sistem Pendukung Keputusan ?</h4>
        <p class="konten">
          1. Membantu mempercepat dan mempermudah proses pengambilan keputusan serta meningkatkan efktivitas keputusan yang diambil manajer lebih dari perbaikan efesiensinya.<br><br>
          2. Untuk membantu pengambilan keputusan memilih berbagai alternatif keputusan yang merupakan hasil pengolahan informasi-informasi yang diperoleh/ tersedia dengan menggunakan model-model pengambilan keputusan.
        </p>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>