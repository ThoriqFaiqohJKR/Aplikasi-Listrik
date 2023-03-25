<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_petugas'];
$level = $_POST['level'];
$username = $_POST['username'];
$pass = $_POST['password'];

// menginput data ke database
$sql = "INSERT into petugas values('','$level','$username','$pass')";

$hasil = mysqli_query($Koneksi,$sql);

if ($hasil) {
    echo "<script>
    alert('Data Petugas/Admin Berhasil Disimpan');
    location.href='../petugas.php';
    </script>"; 
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>