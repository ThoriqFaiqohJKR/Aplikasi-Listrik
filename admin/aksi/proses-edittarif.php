<?php
// koneksi database
include '../../koneksi.php';
 

$id = $_POST['kodetarif'];
$daya = $_POST['daya'];
$tarif = $_POST['tarifperkwh'];

$sql = "UPDATE tarif set daya='$daya', tarifperkwh='$tarif' where kodetarif='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Di Update');
    location.href='../index.php';
    </script>"; 
  }
else {
	echo "Gagal Meng-Update Data Pelanggan";
	exit;
}  

?> 
