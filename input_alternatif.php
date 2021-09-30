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
    <title>PT. Sirukam | Input Alternatif</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
  </head>
  <body>
      <div class="sidebar">
        <div class="dashboard">
          <p>Dashboard</p>
        </div>
        <a href="home_karyawan.php">Home</a>
        <a href="data_karyawan_spk_alternatif.php">Data SPK</a>
        <a href="about_spk.php">About</a>
        <hr>
        <div class="logout">
          <a href="logout.php">Logout</a>
        </div>
      </div>
      <div class="content">
        <div class="head">
          <h1>Data <b><?= $_SESSION['level'] ?></b></h1>
          <hr>
          <a href="data_karyawan_spk_alternatif.php">< Kembali</a>
        </div>
        <?php
          $sql = mysqli_query($koneksi,"SELECT max(id_data) as terbaru FROM tb_alternatif");
          $data = mysqli_fetch_array($sql);
          $kode = $data['terbaru'];
          $id_baru = (int) substr($kode,3,3);
          $id_baru++;
          $prefix = "R";
          $id = $prefix.sprintf("%04s",$id_baru);
        ?>
        <div class="cards">
          <h2>Tambah Data Baru</h2>
          <form method="POST" action="simpan_alternatif.php">
            <table>
              <tr>
                <td>ID Data</td>
                <td><input type="text" name="id_data" id="id_data" value="<?php echo $id ?>" readonly></td>
                <td>Nama Alternatif</td>
                <td><input type="text" name="alternatif" id="alternatif" placeholder="Alternatif" required></td>
              </tr>
              <tr>
                <td>Kandungan Nutrisi Pakan (C1)</td>
                <td><input type="number" min="0" name="c1" id="c1" placeholder="Nilai Kandungan Nutrisi Pakan" required></td>
                <td>Daya Tahan Pakan (C3)</td>
                <td><input type="number" min="0" name="c3" id="c3" placeholder="Nilai Kualitas Pakan" required></td>
              </tr>
              <tr>
                <td>Kebutuhan Pakan (C2)</td>
                <td><input type="number" min="0" name="c2" id="c2" placeholder="Nilai Kebutuhan Pakan" required></td>
                <td>Harga Pakan (C4)</td>
                <td><input type="number" min="0" name="c4" id="c4" placeholder="Harga Pakan" required></td>
              </tr>
            </table><br>
            <input type="submit" id="simpan" name="simpan" value="SIMPAN">
          </form>
        </div>
        <div class="footer">
          <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
        </div>
      </div>
  </body>
</html>