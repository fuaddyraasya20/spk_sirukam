<?php
    $koneksi = mysqli_connect("localhost","root","","pt_sirukam");

    // Cek Koneksi
    if (mysqli_connect_errno()) {
        echo "<script>alert('Koneksi Database Gagal!')</script>". mysqli_connect_error();
    }
?>