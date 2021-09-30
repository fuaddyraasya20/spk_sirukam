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
    <title>Cetak Alternatif | PT. Sirukam</title>
  </head>
  <style>
    body {
      font-family: "Times New Roman", Times, serif;
    }

    .kop-surat {
      text-align: center;
    }

    .judul-surat {
      text-align: center;
    }

    table {
      margin: auto;
      width: 50%;
    }

    table, tr, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 0px 15px;
    }

    .tanda-tangan {
      text-align: right;
    }

    .tanda-tangan .nama {
      padding-right: 25px;
    }

    .center {
      text-align:center;
    }
  </style>
  <script>
    window.print();
  </script>
  <body>
    <header>
      <div class="kop-surat">
        <h2>PT. Sirukam Lumbung Nagari</h2>
        <p>Jl. Solok - Alahan Panjang, Kinari, Bukit Sundi, Solok, Sumatera Barat 2738</p>
        <hr />
      </div>
      <div class="data">
        <h4 class="judul-surat">Data Kriteria Pakan Ternak Sapi Perah</h4>
        <table>
          <tr class="table-header-1">
            <th>No.</th>
            <th>ID Data</th>
            <th>Kriteria Pakan</th>
            <th>Jenis Kriteria</th>
            <th>Bobot Kriteria</th>
          </tr>
          <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_kriteria");
              $count = mysqli_num_rows($sql);
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                  <tr>
                    <td class="center"><?php echo $no ?></td>
                    <td class="center"><?php echo "$hasil[id_data]" ?></td>
                    <td><?php echo "$hasil[kriteria]" ?></td>
                    <td class="center"><?php echo "$hasil[jenis_kriteria]" ?></td>
                    <td class="center"><?php echo "$hasil[bobot]" ?></td>
                  </tr>
                  <?php
                }
              }
            ?>
        </table>
         <p>Keterangan :</p>
         <p>Benefit adalah Kriteria memberikan keuntungan</p>
         <p>Cost adalah Kriteria berkaitan dengan harga</p>
         <p>Total kriteria adalah sebanyak <?php echo "$count" ?> Kriteria Pakan</p> 
         <div class="tanda-tangan">
          <p class="tt">Solok, <?php echo date('d/m/Y'); ?></p><br><br><br>
          <p class="nama"><?= $_SESSION['nama'] ?></p>
         </div>
      </div>
    </header>
  </body>
</html>
