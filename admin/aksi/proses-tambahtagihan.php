<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$idpelanggan = $_POST['idpelanggan'];
$tanggal = $_POST['tanggal'];
$meter = $_POST['jumlahmeter'];

// menginput data ke database
$sql = "INSERT INTO tagihan VALUES('','$idpelanggan','$tanggal','$meter','belum')";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Berhasil Disimpan');
    location.href='../tagihan.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?> 