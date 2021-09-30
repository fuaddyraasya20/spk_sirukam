<?php
    include 'koneksi.php';
    session_start();
    if (empty($_SESSION['username']) or empty($_SESSION['level']))
    {
      echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
    }

    if (isset($_POST['simpan']))
    {
        
        $id_data = $_POST['id_data'];
        $alternatif = $_POST['alternatif'];
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        $c4 = $_POST['c4'];

        $sql = mysqli_query($koneksi,"INSERT INTO tb_alternatif VALUES ('$id_data','$alternatif','$c1','$c2','$c3','$c4')");

        if ($sql)
        {
            echo "<script>alert('Berhasil Simpan Data')</script>";
            echo "<META HTTP-EQUIV='Refresh' Content='0; url=data_karyawan_spk_alternatif.php'>";
        }
        else {
            echo "<script>alert('Data Gagal Disimpan!')</script>";
            echo "<META HTTP-EQUIV='Refresh' Content='0; url=input_alternatif.php'>";
        }
    }
?>