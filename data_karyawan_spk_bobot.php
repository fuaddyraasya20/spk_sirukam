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
    <title>PT. Sirukam | Data SPK Bobot</title>
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
      <a class="active" href="data_karyawan_spk_alternatif.php">Data SPK</a>
      <a href="about_karyawan_spk.php">About</a>
      <hr>
      <div class="logout">
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <div class="content">
      <div class="head">
        <h1>Data <b><?= $_SESSION['level'] ?></b></h1>
        <hr>
      </div>
      <div class="cards">
        <h2>Data SPK</h2><hr>
        <div class="sub-header">
          <div class="button1">
            <p><a href="cetak_karyawan_bobot.php">Cetak</a></p>
          </div>
          <div class="button2">
            <p><a href="data_karyawan_spk_alternatif.php">Alternatif</a></p>
          </div>
          <div class="button3">
            <p><a href="data_karyawan_spk_kriteria.php">Kriteria</a></p>
          </div>
          <div class="button4">
            <p><a href="data_karyawan_spk_bobot.php">Bobot</a></p>
          </div>
          <div class="button5">
            <p><a href="data_karyawan_spk_perhitungan.php">Perhitungan</a></p>
          </div>
        </div>
        <hr>
        <h3>Bobot</h3>
        <table class="perhitungan" >
          <thead>
            <tr>
              <th>No.</th>
              <th>ID</th>
              <th>Kepentingan</th>
              <th>Bobot</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_bobot");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <tr>
                      <td style="text-align:center;"><?php echo $no ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo "$hasil[kepentingan]" ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[bobot]" ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>