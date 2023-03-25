<?php
// koneksi database
include '../../koneksi.php';

$id = $_POST['id_petugas'];
$level = $_POST['level'];
$name = $_POST['username'];
$pass = $_POST['password'];


$sql = "UPDATE petugas set id_petugas='$id', level='$level', username='$name', password='$pass' where id_petugas='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Di Update');
    location.href='../petugas.php';
    </script>"; 
  }
else {
	echo "Gagal Meng-Update Data";
	exit;
}  

?> 
