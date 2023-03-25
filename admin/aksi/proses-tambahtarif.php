<?php 
// koneksi database
include '../../koneksi.php';

$daya = $_POST['daya'];
$tarif = $_POST['tarifperkwh'];

// menginput data ke database
$sql = "INSERT INTO tarif values('','$daya','$tarif')";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Disimpan');
    location.href='../datatarif.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data ";
	exit;
}  

?> 
