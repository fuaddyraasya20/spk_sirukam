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
        <h3>Struktur Organisasi PT. Sirukam</h3>
        <p class="konten">
          Dalam proses kegiatan di PT. Sirukam ini bapak Budi Budar dibantu oleh  beberapa perangkat lainnya yang diberikan kepercayaan untuk menjabat di perusahaan tersebut. Dalam melakukan kegiatan masing masing pekerja sudah memiliki posisi dan tanggung jawab pekerjaan untuk mencapai tujuan PT. sirukam.
          <figure class="konten">
            <img src="struktur_organisasi.png" alt="Struktur Organisasi" style="width:400px; transform:translateX(410px);">
            <figcaption>Sumber : PT. Sirukam</figcaption>
          </figure>
        <p class="konten">
          Struktur organisasi diatas adalah struktur organisasi secara umum dari PT Sirukam. Berdasarkan Gambar 1.1 dapat dijelaskan tugas dan wewenang masing – masing jabatan sebagai berikut:<br><br>
          1. Presiden Direktur <br>
          Direktur utama memiliki tugas yang penting seperti menjadi koordinator, komunikator, pengambil keputusan, pengelola, sekaligus pemimpin dalam perusahaan yang ia pimpin. Dimulai dari menyusun strategi, menyelaraskan visi dan misi, memberi arahan kewenangan pada bawahan, memimpin sebuah pertemuan, membuat keputusan – keputusan penting, hingga controlling capaian perusahaan.<br><br>
          2. Komisaris <br>
          Tugas dan tanggung jawab utama komisaris adalah melakukan pengawasan terhadap pengurusan perusahaan yang dilakukan oleh direksi. Selain itu, posisi ini juga berperan memberikan nasihat berkenaan dengan kebijakan direksi dalam menjalankan perusahaan. <br><br>
          3. Direktur <br>
          Direktur memiliki tanggung jawab yang cukup berat karena harus mengatur perusahaan secara menyeluruh. Adapun tanggung jawab direktur perusahaan secara garis besar antara lain: <br>
          a. Membuat  kebijakan-kebijakan  dalam  perusahaan  yang dipimpin. <br>
          b. Memilih, menentukan, dan mengawasi pekerjaan setiap karyawan. <br>
          c. Menyetujui anggaran tahunan perusahaan dan melaporkan laporan pada pemegang saham. <br>
          d. Bertanggung jawab atas kerugian yang dialami oleh perusahaan.
        </p>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>