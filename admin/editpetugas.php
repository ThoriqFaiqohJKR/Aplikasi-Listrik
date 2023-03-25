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
                <h3 style="text-align: center; font-family: Georgia; font-size:30px">Edit Data Petugas/Admin</h3>
				<?php
					$id = $_GET['id_petugas'];
					$data = mysqli_query($Koneksi, "select * from petugas where id_petugas='$id'");
					while ($d = mysqli_fetch_array($data)) {
				?>
               		<form method="post" action="aksi/proses-editpetugas.php">
			<table class="table table-light table-striped">
			<tr>
					<td>Data Petugas/Admin :</td>
					<td>
						<input hidden type="number" readonly name="id_petugas" value="<?php echo $d['id_petugas']; ?>">
					</td>
			</tr>
			<tr>
					<td>Level</td>
					<td> <select type="text" name="level" value="<?php echo $d['level']; ?>">
							<option disabled selected> Pilih </option>
							<option value="admin">Admin</option>
							<option value="petugas">Petugas</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
			</table>
					</br>
					<input type="submit" value="SIMPAN" type="button" class="btn btn-primary">
					<a href="petugas.php" class="btn btn-danger">KEMBALI</a>
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