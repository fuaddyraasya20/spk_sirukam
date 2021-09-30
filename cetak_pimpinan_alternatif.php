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
        <h4 class="judul-surat">Data Alternatif Pakan Ternak Sapi Perah</h4>
        <table>
          <tr class="table-header-1">
            <th rowspan="2">No.</th>
            <th rowspan="2">ID Data</th>
            <th rowspan="2">Alternatif Pakan</th>
            <th colspan="4">Kriteria</th>
          </tr>
          <tr>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
          </tr>
          <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_alternatif");
              $count = mysqli_num_rows($sql);
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                  <tr>
                    <td class="center"><?php echo $no ?></td>
                    <td class="center"><?php echo "$hasil[id_data]" ?></td>
                    <td><?php echo "$hasil[alternatif]" ?></td>
                    <td class="center"><?php echo "$hasil[c1]" ?></td>
                    <td class="center"><?php echo "$hasil[c2]" ?></td>
                    <td class="center"><?php echo "$hasil[c3]" ?></td>
                    <td class="center"><?php echo "$hasil[c4]" ?></td>
                  </tr>
                  <?php
                }
              }
            ?>
        </table>
         <p>Keterangan :</p>
         <p>C1 = Kandungan Nutrisi Pakan</p>
         <p>C2 = Kebutuhan Pakan</p>
         <p>C3 = Daya Tahan Pakan</p>
         <p>C4 = Harga Pakan</p>
         <p>Total alternatif sebanyak <?php echo "$count" ?> Alternatif Pakan</p> 
         <div class="tanda-tangan">
          <p class="tt">Solok, <?php echo date('d/m/Y'); ?></p><br><br><br>
          <p class="nama">Pimpinan</p>
         </div>
      </div>
    </header>
  </body>
</html>
