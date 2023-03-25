<?php 
session_start();
if(isset($_SESSION['username']))
{
include '../koneksi.php';
?>
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
        <a class="nav-link" href="index.php" style="color: white;">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tagihan.php" style="color: white;">Data tagihan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="petugas.php" style="color: white;">Data Petugas/Admin</a>
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
        <body>
            <div class="container" style="background-color: white;">
                <h3 style="text-align: center; font-family: Georgia; font-size:30px">Masukkan Data</h3>
                <form method="post" action="aksi/proses-tambahtagihan.php">
                <div class="form-group">
                        <label for="exampleInputPassword1">Nama Pelanggan</label>
                       <select class="custom-select" id="inputGroupSelect01" name="idpelanggan">
                        <option disabled selected> Pilih Nama Pelanggan</option>
                        <?php
                        $no = 1;
                        $data = mysqli_query($Koneksi, "select * from pelanggan");
                        while ($d = mysqli_fetch_array($data)) {

                        ?>
                            <option value="<?= $d['idpelanggan'] ?>"><?= $d['username'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Tanggal Tagihan</label>
                        <input class="form-control" id="inputGroupSelect01" type="date" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Meter</label>
                        <input class="form-control" id="inputGroupSelect01" type="number" name="jumlahmeter">
                    </div>
                    <tr>
                        <td></td>
                        <td><input type="submit" Valuea="simpan" class="btn btn-primary"></td>
                        <td><a href="tambahtagihan.php" class="btn btn-danger">KEMBALI</a></td>
                    </tr>
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