<?php
// koneksi database
include '../../koneksi.php';


$id = $_POST['idpelanggan'];
$nama = $_POST['username'];
$pass = $_POST['password'];
$alamat = $_POST['alamat'];
$tarif = $_POST['kodetarif'];
$meter = $_POST['nometer'];

$sql = "update pelanggan set username='$nama', password='$pass', alamat='$alamat', kodetarif='$tarif', nometer='$meter' where idpelanggan='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Di Update');
    location.href='../index.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?> 
