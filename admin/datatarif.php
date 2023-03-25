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
<h2 style="text-align: center; font-family:Copperplate;">Data Tarif Listrik perKWH</h2>
<a type="button" class="btn btn-outline-primary" href="tambahtarif.php">Tambah Tarif</a>
<br></br>
    <table class="table table-dark table-striped" border='1'>
        <tr>
            <th>No</th>
            <th>Daya</th>
            <th>Tarif/kwh</th>
            <th>aksi</th>


            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($Koneksi, "select * from tarif ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['daya']; ?> </td>
            <td>Rp <?php echo $d['tarifperkwh']; ?> </td>
            <td><a href="edittarif.php?kodetarif=<?php echo $d['kodetarif']; ?>" class="btn btn-info">edit</a>
            <a href="aksi/proses-hapustarif.php?kodetarif=<?php echo $d['kodetarif']; ?>" class="btn btn-danger">Hapus</a></td>
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