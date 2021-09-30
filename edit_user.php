<?php
    include 'koneksi.php';
    session_start();
    if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
      echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
    }
    $sql = mysqli_query($koneksi,"select * from tb_user where id_data='$_GET[id_data]'");
    $hasil = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Sirukam | Input User</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
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
          <a href="data_pimpinan_user.php">< Kembali</a>
        </div>
        <div class="cards">
          <h2>Tambah Data Baru</h2>
          <form method="POST">
            <table>
              <tr>
                <td>ID Data</td>
                <td><input type="text" name="id_data" id="id_data" value="<?php echo "$hasil[id_data]" ?>" readonly></td>
                <td>Level</td>
                <td>
                  <select name="level" id="level" style="width:200;" required>
                    <option disabled selected value=""><?php echo "$hasil[level]" ?></option>
                    <option value="Pimpinan">Pimpinan</option>
                    <option value="Karyawan">Karyawan</option>
                </td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo "$hasil[nama]" ?>" required></td>
              </tr>
              <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" placeholder="Username" value="<?php echo "$hasil[username]" ?>" required></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" placeholder="Password" value="<?php echo "$hasil[password]" ?>" required></td>
              </tr>
            </table><br>
            <input type="submit" id="ubah" name="ubah" value="SIMPAN PERUBAHAN">
          </form>
        </div>
        <div class="footer">
          <p>&copy; Nindi Sri Haryanti 2021-<?= date('Y') ?></p>
        </div>
      </div>
  </body>
</html>
<?php
  if(isset($_POST['ubah']))
	{
    $id_data = $_POST['id_data'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$level = $_POST['level'];
		$password = $_POST['password'];
        
    $sql = mysqli_query ($koneksi,"UPDATE tb_user set nama = '$nama', username = '$username', password = '$password', level = '$level' where id_data='$id_data'");
		if($sql)
		{
			echo "<script>alert('Data berhasil diubah.')</script>";
			echo "<META HTTP-EQUIV='Refresh' Content='0; url=data_pimpinan_user.php'>";
		}
		else
		{
			echo "<script>alert('Gagal mengubah data!')</script>";
			echo "<META HTTP-EQUIV='Refresh' Content='0; url=edit_user.php?id_data=$hasil[id_data]'>";
		}
		echo "<META HTTP-EQUIV='Refresh' Content='0; url=data_pimpinan_user.php'>";
	}
?>