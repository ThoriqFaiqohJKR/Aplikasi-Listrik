<?php 
include '../../koneksi.php';

$id = $_GET['idpelanggan'];

$sql = "DELETE from pelanggan where idpelanggan='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    location.href='../index.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?> 
