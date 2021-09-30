<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPK PT.SIRUKAM</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="kotak">
      <div class="heading">
        <p>Log In PT. Sirukam</p>
      </div>
      <div>
        <form method="POST" action="login.php">
          <input type="text" name="username" id="username" placeholder="User Name" required autofocus/>
          <input type="password" name="password" id="password" placeholder="Password" required/>
          <select required name="level" id="level" style="width: 235px;">
            <option disabled selected value="">Pilih Role User</option>
            <option value="Pimpinan">Pimpinan</option>
            <option value="Karyawan">Karyawan</option>
          </select>
          <input type="submit" value="Sign In" />
        </form>
      </div>
    </div>
  </body>
</html>