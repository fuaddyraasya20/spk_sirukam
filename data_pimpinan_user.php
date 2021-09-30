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
    <title>PT. Sirukam | Data User</title>
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
      <a class="active" href="data_pimpinan_user.php">Data User</a>
      <a href="data_pimpinan_alternatif.php">Data SPK</a>
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
      </div>
      <div class="cards">
        <h2>Data User</h2><hr>
        <div class="button">
          <p><a href="input_user.php">Tambah</a></p>
        </div>
        <table id="tb_data" class="display" style="width:1000px;">
          <thead>
            <tr>
              <th rowspan="2">No.</th>
              <th rowspan="2">ID</th>
              <th rowspan="2">Nama Lengkap</th>
              <th rowspan="2">User Name</th>
              <th rowspan="2">Level</th>
              <th colspan="2">Tindakan</th>
            </tr>
            <tr>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_user");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <script>
                      function hapus ()
                      { return confirm ("Hapus data ini ?"); }
                    </script>
                    <tr>
                      <td style="text-align:center;"><?php echo "$no" ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo "$hasil[nama]" ?></td>
                      <td><?php echo "$hasil[username]" ?></td>
                      <td><?php echo "$hasil[level]" ?></td>
                      <td style="text-align:center;"><?php echo "<a style='text-decoration:none;' href='edit_user.php?id_data=$hasil[id_data]'>Edit</a>" ?></td>
                      <td style="text-align:center;"><?php echo "<a style='text-decoration:none;' href='hapus_user.php?id_data=$hasil[id_data]' onclick='return hapus()'>Hapus</a>" ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>User Name</th>
              <th>Level</th>
              <th colspan="2">Tindakan</th>
            </tr>
          </tfoot>
        </table>
        <script>
          $(document).ready(function() {
            $("#tb_data").DataTable({responsive:true});
          });
        </script>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>