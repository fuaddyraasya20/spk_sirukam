<?php
    include 'koneksi.php';
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
        <h4 class="judul-surat">Data Bobot</h4>
        <table>
          <tr class="table-header-1">
            <th>No.</th>
            <th>ID Data</th>
            <th>Bobot</th>
            <th>Tingkat Kepentingan</th>
          </tr>
          <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_bobot");
              $count = mysqli_num_rows($sql);
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                  <tr>
                    <td class="center"><?php echo $no ?></td>
                    <td class="center"><?php echo "$hasil[id_data]" ?></td>
                    <td><?php echo "$hasil[kepentingan]" ?></td>
                    <td class="center"><?php echo "$hasil[bobot]" ?></td>
                  </tr>
                  <?php
                }
              }
            ?>
        </table>
         <div class="tanda-tangan">
          <p class="tt">Solok, <?php echo date('d/m/Y'); ?></p><br><br><br>
          <p class="nama">Pimpinan</p>
         </div>
      </div>
    </header>
  </body>
</html>
