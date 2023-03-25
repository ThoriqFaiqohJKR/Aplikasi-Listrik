<?php 
session_start();
if(isset($_SESSION['username']))
{
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="style/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title> Laporan </title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a>
  <img src="../img/icon.png" style="width: 50px; height: 50px;" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: white;">Data tagihan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="laporan.php" style="color: white;">Laporan</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a type="button" class="btn btn-danger"href="../logout.php">Logout</a>
    </form>
  </div>
</nav>
<div style="padding-top: 50px;">
<h2 style="text-align: center; font-family:Copperplate;">Laporan Pembayaran Listrik</h2>
<a type="button" class="btn btn-outline-primary" target="_blank" href="cetak.php">cetak</a>
<br></br>
<body style="background-color: blue;">
    <table class="table table-dark table-striped" border='1'>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Opsi</th>
            <th>Biaya Admin</th>
            <th>Harga Total</th>

            <?php
            $no = 1;
            $data = mysqli_query($Koneksi, "select * from pembayaran, pelanggan where pembayaran.idpelanggan = '$_SESSION[idpelanggan]' and pembayaran.idpelanggan = pelanggan.idpelanggan");
            while ($d = mysqli_fetch_array($data)) {
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['username']; ?> </td>
            <td><?php echo $d['tanggal']; ?> </td>
            <td><a href="bayar.php?idbayar=<?php echo $d['idbayar']; ?>" class="btn btn-success">Membayar Tagihan</a></td>
            <td>Rp. 2500</td>
            <td>Rp. <?php echo $d['biaya']; ?> </td> 
        </tr>
    <?php
            }
    ?>

    </table>
</body>
</html>
<?php
    }
else
{
    echo"<script>
    alert('Anda Tidak Boleh Masuk');
    location.href='../index.php';
    </script>";
}
?>