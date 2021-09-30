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
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        $sql = mysqli_query($koneksi,"INSERT INTO tb_user VALUES ('$id_data','$nama','$username','$password','$level')");

        if ($sql)
        {
            echo "<script>alert('Berhasil Simpan Data')</script>";
            echo "<META HTTP-EQUIV='Refresh' Content='0; url=data_user.php'>";
        }
        else {
            echo "<script>alert('Data Gagal Disimpan!')</script>";
            echo "<META HTTP-EQUIV='Refresh' Content='0; url=data_user.php'>";
        }
    }
?>