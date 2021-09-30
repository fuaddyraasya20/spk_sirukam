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
        <h4 class="judul-surat">Data Perhitungan Pakan Ternak Sapi Perah <br>menggunakan Metode Weight Product</h4>
        <p>1.  Alternatif Pakan Ternak Sapi Perah</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th>No</th>
              <th>ID</th>
              <th>Alternatif</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_alternatif");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <tr>
                      <td class="center"><?php echo $no ?></td>
                      <td class="center"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo "$hasil[alternatif]" ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>

        <p>2.  Kriteria Pakan Ternak Sapi Perah</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th>No</th>
              <th>ID</th>
              <th>Kriteria</th>
              <th>Jenis Kriteria</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_kriteria");
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
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>

        <p>3.  Bobot</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th>No.</th>
              <th>ID</th>
              <th>Bobot</th>
              <th>Tingkat Kepentingan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
                $no = 0;
                $sql = mysqli_query($koneksi,"select * from tb_bobot");
                {
                  while ($hasil = mysqli_fetch_array($sql))
                  {
                    $no++;
                    ?>
                      <tr>
                        <td class="center"><?php echo $no ?></td>
                        <td class="center"><?php echo "$hasil[id_data]" ?></td>
                        <td class="center"><?php echo "$hasil[bobot]" ?></td>
                        <td class="center"><?php echo "$hasil[kepentingan]" ?></td>
                      </tr>
                    <?php
                  }
                }
              ?>
            </tr>
          </tbody>
        </table>

        <p>4.  Bobot dari Kriteria</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th>No</th>
              <th>ID</th>
              <th>Kriteria</th>
              <th>Jenis Kriteria</th>
              <th>Bobot</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_kriteria");
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
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4">Total Bobot</th>
              <?php
                $sql = mysqli_query($koneksi, "SELECT SUM(`bobot`) AS total_bobot FROM `tb_kriteria`");
                $row = mysqli_fetch_assoc($sql);
                $total_bobot = $row['total_bobot'];
              ?>
              <td class="center"><?php echo $total_bobot; ?></td>
            </tr>
          </tfoot>
        </table>

        <p>5.  Matriks Perbandingan Alternatif dan Kriteria</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th rowspan="2">No.</th>
              <th rowspan="2">ID</th>
              <th rowspan="2">Alternatif</th>
              <th colspan="4">Kriteria</th>
            </tr>
            <tr class="table-header-1">
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_alternatif");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <tr>
                      <td class="center"><?php echo $no ?></td>
                      <td class="center"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo $hasil["alternatif"] ?></td>
                      <td class="center"><?php echo $hasil["c1"] ?></td>
                      <td class="center"><?php echo $hasil["c2"] ?></td>
                      <td class="center"><?php echo $hasil["c3"] ?></td>
                      <td class="center"><?php echo $hasil["c4"] ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>

        <p>6.  Nilai Relatif Bobot Awal (Wj)</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th rowspan="2">Bobot</th>
              <th colspan="4">Kriteria</th>
            </tr>
            <tr class="table-header-1">
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bobot Kepentingan</td>
              <?php
                $sql = mysqli_query($koneksi,"select * from tb_kriteria");
                {
                  while ($hasil = mysqli_fetch_array($sql))
                  {
                    $nilai_bobot = number_format($hasil['bobot']/$total_bobot,3);
                    ?>
                      <td class="center"><?php echo "$nilai_bobot" ?></td>  
                    <?php
                  }
                }
              ?>
            </tr>
          </tbody>
          <tfoot>
            <th>Total Bobot Kepentingan</th>
            <?php
                $sql = mysqli_query($koneksi,"select * from tb_kriteria");
                $sum = 0;
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $nilai_bobot = number_format($hasil['bobot']/$total_bobot,3);
                  $sum += $nilai_bobot;
                }
              ?>
              <td colspan="4" class="center"><?php echo $sum ?></td>
          </tfoot>
        </table>

        <p>7.  Perhitungan Vektor S</p>
        <table>
          <thead>
            <tr class="table-header-1">
              <th colspan="3">Pangkat</th>
              <?php
                $sql = mysqli_query($koneksi,"select * from tb_kriteria");
                $p1 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0001'");
                $p2 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0002'");
                $p3 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0003'");
                $p4 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0004'");
                $pp1 = mysqli_fetch_array($p1);
                $pp2 = mysqli_fetch_array($p2);
                $pp3 = mysqli_fetch_array($p3);
                $pp4 = mysqli_fetch_array($p4);
                $pangkatc1 = number_format((int)$pp1[0]/$total_bobot,3);
                $pangkatc2 = number_format((int)$pp2[0]/$total_bobot,3);
                $pangkatc3 = number_format((int)$pp3[0]/$total_bobot,3);
                $pangkatc4 = number_format((int)$pp4[0]/$total_bobot,3);
              ?>
              <td class="center"><?php echo $pangkatc1 ?></td>
              <td class="center"><?php echo -$pangkatc2 ?></td>
              <td class="center"><?php echo $pangkatc3 ?></td>
              <td class="center"><?php echo -$pangkatc4 ?></td>
            </tr>
            <tr class="table-header-1">
              <th rowspan="2">No.</th>
              <th rowspan="2">ID</th>
              <th rowspan="2">Alternatif</th>
              <th colspan="4">Kriteria</th>
            </tr>
            <tr class="table-header-1">
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql = mysqli_query($koneksi,"select * from tb_alternatif");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <tr>
                      <td class="center"><?php echo $no ?></td>
                      <td class="center"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo $hasil["alternatif"] ?></td>
                      <td class="center"><?php echo $hasil["c1"] ?></td>
                      <td class="center"><?php echo $hasil["c2"] ?></td>
                      <td class="center"><?php echo $hasil["c3"] ?></td>
                      <td class="center"><?php echo $hasil["c4"] ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>

        <p>8.  Hasil Vektor S</p>
        <table>
          <thead>
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">ID</th>
              <th rowspan="2">Alternatif</th>
              <th colspan="4">Kriteria</th>
              <th rowspan="2">Vektor S</th>
            </tr>
            <tr>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql1 = mysqli_query($koneksi,"select * from tb_alternatif");
              $b1 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0001'");
              $b2 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0002'");
              $b3 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0003'");
              $b4 = mysqli_query($koneksi,"select bobot from tb_kriteria where id_data = 'C0004'");
              $bb1 = mysqli_fetch_array($b1);
              $bb2 = mysqli_fetch_array($b2);
              $bb3 = mysqli_fetch_array($b3);
              $bb4 = mysqli_fetch_array($b4);
              $nb1 = number_format((int)$bb1[0]/$total_bobot,3);
              $nb2 = number_format((int)$bb2[0]/$total_bobot,3);
              $nb3 = number_format((int)$bb3[0]/$total_bobot,3);
              $nb4 = number_format((int)$bb4[0]/$total_bobot,3);
              while ($hasil1 = mysqli_fetch_array($sql1))
              {
                $no++;
                $vsc1 = number_format(pow((int)$hasil1[2],$nb1),3);
                $vsc2 = number_format(pow((int)$hasil1[3],-$nb2),3);
                $vsc3 = number_format(pow((int)$hasil1[4],$nb3),3);
                $vsc4 = number_format(pow((int)$hasil1[5],-$nb4),3);
                $totalvs = $vsc1 + $vsc2 + $vsc3 + $vsc4;
                ?>
                  <tr>
                    <td class="center"><?php echo $no; ?></td>
                    <td class="center"><?php echo $hasil1[0] ?></td>
                    <td><?php echo $hasil1[1] ?></td>
                    <td class="center"><?php echo $vsc1 ?></td>
                    <td class="center"><?php echo $vsc2 ?></td>
                    <td class="center"><?php echo $vsc3 ?></td>
                    <td class="center"><?php echo $vsc4 ?></td>
                    <td class="center"><?php echo $totalvs ?></td>
                  </tr>
                <?php
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="7">Total Vektor S</th>
              <td class="center">
                <?php
                  $totvs = 0;
                  $sql2 = mysqli_query($koneksi,"select * from tb_alternatif");
                  while ($hasil1 = mysqli_fetch_array($sql2))
                  {
                    $vsc1 = pow((int)$hasil1[2],$nb1);
                    $vsc2 = pow((int)$hasil1[3],-$nb2);
                    $vsc3 = pow((int)$hasil1[4],$nb3);
                    $vsc4 = pow((int)$hasil1[5],-$nb4);
                    $totalvs = $vsc1 + $vsc2 + $vsc3 + $vsc4;
                    $totvs += $totalvs;
                  }
                  echo number_format($totvs,3);
                ?>
              </td>
            </tr>
          </tfoot>
        </table>

        <p>9.  Perhitungan Vektor V</p>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Alternatif</th>
              <th>Vektor V</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $totvs = 0;
              $sql1 = mysqli_query($koneksi,"select * from tb_alternatif");
              while ($hasil1 = mysqli_fetch_array($sql1))
              {
                $no++;
                $vsc1 = pow((int)$hasil1[2],$nb1);
                $vsc2 = pow((int)$hasil1[3],-$nb2);
                $vsc3 = pow((int)$hasil1[4],$nb3);
                $vsc4 = pow((int)$hasil1[5],-$nb4);
                $totalvs = $vsc1 + $vsc2 + $vsc3 + $vsc4;
                $totvs += $totalvs;
              }
              $no = 0;
              $sql1 = mysqli_query($koneksi,"select * from tb_alternatif");
              while ($hasil1 = mysqli_fetch_array($sql1))
              {
                $no++;
                $vsc1 = pow((int)$hasil1[2],$nb1);
                $vsc2 = pow((int)$hasil1[3],-$nb2);
                $vsc3 = pow((int)$hasil1[4],$nb3);
                $vsc4 = pow((int)$hasil1[5],-$nb4);
                $totalvs = $vsc1 + $vsc2 + $vsc3 + $vsc4;
                ?>
                  <tr>
                    <td class="center"><?php echo $no; ?></td>
                    <td class="center"><?php echo $hasil1[0] ?></td>
                    <td><?php echo $hasil1[1] ?></td>
                    <td class="center"><?php echo number_format($totalvs/$totvs,3) ?></td>
                  </tr>
                <?php
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3">Total Vektor V</th>
              <td class="center">
                <?php
                  $totalvv = 0;
                  $sql1 = mysqli_query($koneksi,"select * from tb_alternatif");
                  while ($hasil1 = mysqli_fetch_array($sql1))
                  {
                    $vsc1 = pow((int)$hasil1[2],$nb1);
                    $vsc2 = pow((int)$hasil1[3],-$nb2);
                    $vsc3 = pow((int)$hasil1[4],$nb3);
                    $vsc4 = pow((int)$hasil1[5],-$nb4);
                    $totalvs = $vsc1 + $vsc2 + $vsc3 + $vsc4;
                    $totalvv += ($totalvs/$totvs);
                  }
                  echo $totalvv;
                ?>
              </td>
            </tr>
          </tfoot>
        </table>

        <p>10. Rangking Alternatif</p>
        <table>
          <thead>
            <tr>
              <th>Alternatif</th>
              <th>Ranking</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 0;
              $sql1 = mysqli_query($koneksi,"select * from tb_alternatif order by id_data asc");
              while ($hasil1 = mysqli_fetch_array($sql1))
              {
                $no++;
                $vsc1 = pow((int)$hasil1[2],$nb1);
                $vsc2 = pow((int)$hasil1[3],-$nb2);
                $vsc3 = pow((int)$hasil1[4],$nb3);
                $vsc4 = pow((int)$hasil1[5],-$nb4);
                $totalvs = $vsc1 + $vsc2 + $vsc3 + $vsc4;
                ?>
                  <tr>
                    <td><?php echo $hasil1[1]; ?></td>
                    <td style="text-align:center;"><?php echo number_format($totalvs/$totvs,3) ?></td>
                  </tr>
                <?php
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2"><h4 style="text-align:center; color:red;">Nilai Ranking Tertinggi adalah Alternatif Terbaik</h4></th>
            </tr>
          </tfoot>
        </table>
        <div class="tanda-tangan">
          <p class="tt">Solok, <?php echo date('d/m/Y'); ?></p><br><br><br>
          <p class="nama">Pimpinan</p>
        </div>
      </div>
    </header>
  </body>
</html>
