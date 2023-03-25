<?php 
include '../../koneksi.php';

$id = $_GET['kodetarif'];

$sql = "DELETE from tarif where  kodetarif='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    location.href='../datatarif.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?> 
