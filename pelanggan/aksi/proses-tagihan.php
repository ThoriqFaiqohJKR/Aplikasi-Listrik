<?php
session_start();
include"../../koneksi.php";

$idpelanggan = $_POST['idpelanggan'];
$tanggal = $_POST['tanggal'];
$biaya = $_POST['biayaadmin'];
$pembayaran =$_POST['pembayaran'];
$admin = '2500';

$data = mysqli_query ($Koneksi, " select  * from pelanggan, tarif where pelanggan.idpelanggan = $idpelanggan and tarif.kodetarif = pelanggan.kodetarif");
$row = mysqli_fetch_array ($data);
$harga = $biaya + $admin;
 
$sql = "insert into pembayaran values('','$idpelanggan','$tanggal','$harga','','','$pembayaran')";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Tagihan Telah Dikonfirmasi');
    location.href='../laporan.php';
    </script>"; 
  }
else {
	echo "Gagal Mengupdate Tagihan";
	exit;
}  

?> 