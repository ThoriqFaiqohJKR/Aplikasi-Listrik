<?php 
session_start();
if(isset($_SESSION['username']))
{
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="style/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="../img/icon.png">
    <title>Petugas</title>
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
        <a class="nav-link" href="index.php" style="color: white;">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="datatagihan.php" style="color: white;">Data tagihan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="laporan.php" style="color: white;">Laporan Pembayaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="konfirmasi.php" style="color: white;">Konfirmasi Pembayaran</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a type="button" class="btn btn-danger"href="../logout.php">Logout</a>
    </form>
  </div>
</nav>
<div style="padding-top: 100px;">
<body>
    <h1 align="center"> Data Pelanggan</h1>
    <table class="table table-dark table-striped" border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>password</th>
            <th>alamat</th>
            <th>No Meter</th>
            <th>kode tarif</th>

                <?php
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($Koneksi, "select * from pelanggan, tarif where tarif.kodetarif = pelanggan.kodetarif");
                while ($d = mysqli_fetch_array($data)) {
                ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['username']; ?> </td>
            <td><?php echo $d['password']; ?> </td>
            <td><?php echo $d['alamat']; ?> </td>
            <td><?php echo $d['nometer']; ?> </td>
            <td><?php echo $d['daya']; ?>/ RP. <?php echo $d['tarifperkwh']; ?></td>
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