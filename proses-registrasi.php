<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form 
$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$kodetarif = $_POST['kodetarif'];
$nometer = $_POST['nometer'];

// menginput data ke database
$sql = "INSERT INTO pelanggan VALUES('','$username','$password','$alamat','$kodetarif','$nometer')";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Registrasi Berhasil Silahkan Login');
    location.href='login.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?> 
