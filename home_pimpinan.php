<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
}

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Sirukam | Home Pimpinan</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
  </head>
  <body>
      <div class="sidebar">
        <div class="dashboard">
          <p>Dashboard</p>
        </div>
        <a class="active" href="home_pimpinan.php">Home</a>
        <a href="data_pimpinan_user.php">Data User</a>
        <a href="data_pimpinan_alternatif.php">Data SPK</a>
        <a href="about_spk.php">About</a>
        <hr>
        <div class="logout">
          <a href="logout.php">Logout</a>
        </div>
      </div>
      <div class="content">
        <div class="head">
            <h1>Home <b><?= $_SESSION['level'] ?></b></h1>
            <hr>
            <p>Hello, <b><?= $_SESSION['nama'] ?></b></p>
            <p> Selamat datang, anda berhasil login sebagai <b><?= $_SESSION['username'] ?></b> </p>
        </div>
        <div class="cards">
         <h2>Informasi Data</h2>
         <hr>
         <h3 style="text-align: left;">Jumlah Data</h3>
         <div class="sub-header">
          <?php
            $query1 = "SELECT count(id_data) as total1 FROM tb_alternatif";
            $hasil1 = mysqli_query($koneksi,$query1);
            $data1 = mysqli_fetch_assoc($hasil1);

            $query2 = "SELECT count(id_data) as total2 FROM tb_kriteria";
            $hasil2 = mysqli_query($koneksi,$query2);
            $data2 = mysqli_fetch_assoc($hasil2);

            $query3 = "SELECT count(id_data) as total3 FROM tb_bobot";
            $hasil3 = mysqli_query($koneksi,$query3);
            $data3 = mysqli_fetch_assoc($hasil3);

            $query6 = "SELECT count(id_data) as total6 FROM tb_user";
            $hasil6 = mysqli_query($koneksi,$query6);
            $data6 = mysqli_fetch_assoc($hasil6);
          ?>
          <div class="kotak1">
            <p>Alternatif | <?php echo $data1['total1']; ?></p>
          </div>
          <div class="kotak2">
            <p>Kriteria | <?php echo $data2['total2']; ?></p>
          </div>
          <div class="kotak3">
            <p>Bobot | <?php echo $data3['total3']; ?></p>
          </div>
        </div>
          <hr>
          <h3 style="text-align: left;">Jumlah User</h3>
          <div class="sub-header">
            <div class="kotak6">
              <p>Total User | <?php echo $data6['total6']; ?></p>
            </div>
          </div>
        </div>
        <div class="footer">
          <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
        </div>
      </div>
  </body>
</html>