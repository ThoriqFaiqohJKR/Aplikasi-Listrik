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
          <body>
            <div class="container" style="background-color: white;">
                <h3 style="text-align: center; font-family: Georgia; font-size:30px">Edit Pelanggan</h3>
				<?php
					$id = $_GET['kodetarif'];
					$data = mysqli_query($Koneksi, "select * from tarif where kodetarif='$id'");
					while ($d = mysqli_fetch_array($data)) {
				?>
               		<form method="post" action="aksi/proses-edittarif.php">
			<table class="table table-light table-striped">
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="kodetarif" value="<?php echo $d['kodetarif']; ?>">
						<input type="text" name="daya" value="<?php echo $d['daya']; ?>">
					</td>
				</tr>
				<tr>
					<td>No Meteran</td>
					<td><input type="number" name="tarifperkwh" value="<?php echo $d['tarifperkwh']; ?>" required></td>
				</tr>
			</table>
					</br>
					<input type="submit" value="SIMPAN" type="button" class="btn btn-primary">
					<a href="index.php" class="btn btn-danger">KEMBALI</a>
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