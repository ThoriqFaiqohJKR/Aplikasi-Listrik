<?php 
// koneksi database
include '../../koneksi.php';

$id = $_POST['idtagihan'];
$idpelanggan = $_POST['idpelanggan'];
$tanggal = $_POST['tanggal'];
$jumlahmeter = $_POST['jumlahmeter'];
$status = $_POST['status'];

$sql = "UPDATE tagihan set idpelanggan='$idpelanggan', tanggal='$tanggal', jumlahmeter='$jumlahmeter', status='$status' where idtagihan='$id'";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Tagihan Berhasil Di Update');
    location.href='../konfirmasi.php';
    </script>"; 
  }
else {
	echo "Gagal Mengupdate Tagihan";
	exit;
}  

?> 