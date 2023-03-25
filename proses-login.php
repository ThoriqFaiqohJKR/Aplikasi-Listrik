<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$pilih1 = mysqli_query($Koneksi, "SELECT * FROM pelanggan WHERE username='$username' and password='$password'");
$row1   = mysqli_num_rows($pilih1);
$data1   = mysqli_fetch_assoc($pilih1);
$pilih2 = mysqli_query($Koneksi, "SELECT * FROM petugas WHERE username='$username' and password='$password' and level = 'admin'");
$row2   = mysqli_num_rows($pilih2);
$data2   = mysqli_fetch_assoc($pilih2);
$pilih3 = mysqli_query($Koneksi, "SELECT * FROM petugas WHERE username='$username' and password='$password' and level = 'petugas'");
$row3   = mysqli_num_rows($pilih3);
$data3   = mysqli_fetch_assoc($pilih3);

if ($row1 == 1) {
    $_SESSION['username'] = $data1['username'];
    $_SESSION['idpelanggan'] = $data1['idpelanggan'];
    echo "<script>
    alert('Login Berhasil');
    location.href='pelanggan/index.php';
    </script>";
} elseif ($row2 == 1) {
    $_SESSION['username'] = $username;
    echo "<script>
    alert('Login Berhasil');
    location.href='admin/index.php';
    </script>";
} elseif ($row3 == 1) {
    $_SESSION['username'] = $username;
    echo "<script>
    alert('Login Berhasil');
    location.href='petugas/index.php';
    </script>";
} else {
    echo "<script>
    alert('isikan username dan password anda dengan benar dan coba lagi');
    location.href='login.php';
    </script>";
}
