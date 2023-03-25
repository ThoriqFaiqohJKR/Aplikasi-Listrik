<?php 
include '../../koneksi.php';


$id = $_GET['id_petugas'];

$sql = "DELETE from petugas where id_petugas='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Petugas/Admin Berhasil Dihapus');
    location.href='../petugas.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?> 
