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
    <title>PT. Sirukam | Data SPK Perhitungan</title>
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
      <a class="active" href="data_pimpinan_alternatif.php">Data SPK</a>
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
        <h2>Data SPK</h2><hr>
        <div class="sub-header">
          <div class="button1">
            <p><a href="cetak_pimpinan_perhitungan.php">Cetak</a></p>
          </div>
          <div class="button2">
            <p><a href="data_pimpinan_alternatif.php">Alternatif</a></p>
          </div>
          <div class="button3">
            <p><a href="data_pimpinan_kriteria.php">Kriteria</a></p>
          </div>
          <div class="button4">
            <p><a href="data_pimpinan_bobot.php">Bobot</a></p>
          </div>
          <div class="button5">
            <p><a href="data_pimpinan_perhitungan.php">Perhitungan</a></p>
          </div>
        </div>
        <hr>
        <h3>Perhitungan</h3>
        <h4>1. Alternatif</h4>
        <table class="perhitungan">
          <thead>
            <tr>
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
                      <td style="text-align:center;"><?php echo $no ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo "$hasil[alternatif]" ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
        <h4>2. Kriteria</h4>
        <table class="perhitungan">
          <thead>
            <tr>
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
                      <td style="text-align:center;"><?php echo $no ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo "$hasil[kriteria]" ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[jenis_kriteria]" ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
        <h4>3. Bobot</h4>
        <table class="perhitungan">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID</th>
              <th>Bobot</th>
              <th>Tingkat Kepentingan</th>
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
                      <td style="text-align:center;"><?php echo "$hasil[bobot]" ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[kepentingan]" ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
        <h4>4. Bobot Kriteria</h4>
        <table class="perhitungan">
          <thead>
            <tr>
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
                      <td style="text-align:center;"><?php echo $no ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo "$hasil[kriteria]" ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[jenis_kriteria]" ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[bobot]" ?></td>
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
              <td style="text-align:center;"><?php echo $total_bobot; ?></td>
            </tr>
          </tfoot>
        </table>
        <h4>5. Matriks Perbandingan Alternatif dan Kriteria</h4>
        <table class="perhitungan">
          <thead>
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">ID</th>
              <th rowspan="2">Alternatif</th>
              <th colspan="4">Kriteria</th>
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
              $sql = mysqli_query($koneksi,"select * from tb_alternatif");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <tr>
                      <td style="text-align:center;"><?php echo $no ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo $hasil["alternatif"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c1"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c2"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c3"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c4"] ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
        <h4>6. Nilai Relatif Bobot Awal (Wj)</h4>
        <table class="perhitungan">
          <thead>
            <tr>
              <th rowspan="2">Bobot</th>
              <th colspan="4">Kriteria</th>
            </tr>
            <tr>
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
                        <td style="text-align:center;"><?php echo "$nilai_bobot" ?></td>  
                      <?php
                    }
                  }
                ?>
            </tr>
          </tbody>
          <tfoot>
            <tr>
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
                <td colspan="4" style="text-align:center;"><?php echo $sum ?></td>
            </tr>
          </tfoot>
        </table>
        <h4>7. Perhitungan Vektor S</h4>
        <table class="perhitungan">
          <thead>
            <tr>
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
              <td style="text-align:center;"><?php echo $pangkatc1 ?></td>
              <td style="text-align:center;"><?php echo -$pangkatc2 ?></td>
              <td style="text-align:center;"><?php echo $pangkatc3 ?></td>
              <td style="text-align:center;"><?php echo -$pangkatc4 ?></td>
            </tr>
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">ID</th>
              <th rowspan="2">Alternatif</th>
              <th colspan="4">Kriteria</th>
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
              $sql = mysqli_query($koneksi,"select * from tb_alternatif");
              {
                while ($hasil = mysqli_fetch_array($sql))
                {
                  $no++;
                  ?>
                    <tr>
                      <td style="text-align:center;"><?php echo $no ?></td>
                      <td style="text-align:center;"><?php echo "$hasil[id_data]" ?></td>
                      <td><?php echo $hasil["alternatif"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c1"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c2"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c3"] ?></td>
                      <td style="text-align:center;"><?php echo $hasil["c4"] ?></td>
                    </tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
        <h4 style="text-align:center;">Hasil</h4>
        <table class="perhitungan">
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
                    <td style="text-align:center;"><?php echo $no; ?></td>
                    <td style="text-align:center;"><?php echo $hasil1[0] ?></td>
                    <td><?php echo $hasil1[1] ?></td>
                    <td style="text-align:center;"><?php echo $vsc1 ?></td>
                    <td style="text-align:center;"><?php echo $vsc2 ?></td>
                    <td style="text-align:center;"><?php echo $vsc3 ?></td>
                    <td style="text-align:center;"><?php echo $vsc4 ?></td>
                    <td style="text-align:center;"><?php echo $totalvs ?></td>
                  </tr>
                <?php
              }
            ?>
                  <tr>
                    <th colspan="7">Total Vektor S</th>
                    <td style="text-align:center;">
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
          </tbody>
        </table>
        <h4>8. Perhitungan Vektor V</h4>
        <table class="perhitungan">
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
                    <td style="text-align:center;"><?php echo $no; ?></td>
                    <td style="text-align:center;"><?php echo $hasil1[0] ?></td>
                    <td><?php echo $hasil1[1] ?></td>
                    <td style="text-align:center;"><?php echo number_format($totalvs/$totvs,3) ?></td>
                  </tr>
                <?php
              }
            ?>
              
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3">Total Vektor V</th>
              <td style="text-align:center;">
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
        <h4>9. Rangking Alternatif</h4>
        <table id="tb_data" class="display" style="width:500px;">
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
              <th>Alternatif</th>
              <th>Ranking</th>
            </tr>
            <tr>
              <th colspan="2"><h4 style="text-align:center; color:red;">Nilai Ranking Tertinggi adalah Alternatif Terbaik</h4></th>
            </tr>
          </tfoot>
        </table>
        <script>
          $(document).ready(function() 
          {
            $("#tb_data").DataTable(
              {
                responsive:true
              });
          });
        </script>
      </div>
      <div class="footer">
        <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
      </div>
    </div>
  </body>
</html>