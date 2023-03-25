<?php 
session_start();
if(isset($_SESSION['username']))
{
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

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
<div style="padding-top: 100px;">
<h2 style="text-align: center; font-family:Copperplate;">Silakan Konfirmasi Pembayaran</h2>
        <br></br>
<body>
<div class="container" style="background-color: white;">
	<?php
	$idpelanggan = $_GET['idbayar'];
	$data = mysqli_query($Koneksi, "select * from pembayaran where idbayar='$idpelanggan'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="aksi/proses-bayar.php">
			<table class="table table-light table-striped">
				<tr>
				<td>Keterangan :</td>
					<td>
						<input type="hidden" name="idbayar" value="<?php echo $d['idbayar']; ?>">
            <input type="hidden" name="idpelanggan" value="<?php echo $d['idpelanggan']; ?>">
					</td>
				</tr>
        <tr>
          <td>Tanggal Bayar</td>
					<td><input type="text" name="tanggal" readonly value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>Biaya</td>
					<td><input type="number" name="biaya" value="<?php echo $d['biaya']; ?>" required></td>
				</tr>
				<tr>
					<td>Bayar</td>
					<td><input type="number" name="bayar" value="<?php echo $d['bayar']; ?>" required></td>
				</tr>
				<tr>
				<td><input type="submit" name="bbayar" value="SIMPAN" type="button" class="btn btn-primary">
				</td>
				<td>
				</td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>
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