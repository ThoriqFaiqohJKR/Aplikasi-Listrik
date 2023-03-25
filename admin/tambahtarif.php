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
    <title> Listrik </title>
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
        <a class="nav-link" href="index.php" style="color: white;">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tagihan.php" style="color: white;">Data tagihan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambahpetugas.php" style="color: white;"> Data Petugas/Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="datatarif.php" style="color: white;">Data Tarif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambahtagihan.php" style="color: white;">Tambah Tagihan</a>
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
<div style="padding-top: 100px;">
<body style="background: url(img/bg.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;" class="trans">
    <div class="white-text" width: 100%; height:700px; margin-top: -35px;"></div>
<div style="padding-top: 75px;">   
        <body>
            <div class="container" style="background-color: white;">
                <h3 style="text-align: center; font-family: Georgia; font-size:30px">Masukkan Data</h3>
                <form action="aksi/proses-tambahtarif.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daya</label>
                        <input type="text" class="form-control" name="daya" placeholder="Masukan Daya">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">TarifperKwh</label>
                        <input type="number" class="form-control" name="tarifperkwh" placeholder="Masukan Tarif">
                    </div>
                    <tr>
                        <td></td>
                        <td><input type="submit" Valuea="submit" class="btn btn-primary"></td>
                        <td><a href="datatarif.php" class="btn btn-danger">KEMBALI</a></td>
                    </tr>
    </br>
                    </table>
                </form>
            </div>
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