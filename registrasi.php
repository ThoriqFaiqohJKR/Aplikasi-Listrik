<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php';
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Listrik</title>
    <link rel="icon" href="img/icon.png">
</head>

<body style="background: url(img/bg.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;" class="trans">
    <div class="white-text" width: 100%; height:700px; margin-top: -35px;"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item" style="align: center;"> 
        <font size="5">Silahkan Registrasi </font>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a type="button" class="btn btn-dark" href="login.php">Login</a>
    </form>
  </div>
</nav>
<div style="padding-top: 75px;">   
        <body>
            <div class="container" style="background-color: white;">
                <h3 style="text-align: center; font-family: Georgia; font-size:30px">Masukkan Data Anda</h3>
                <form method="post" action="proses-registrasi.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputalamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat" required>
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputPassword1">Kode Tarif</label>
                        <select class="custom-select" id="inputGroupSelect01" name="kodetarif" required>
							<option disabled selected> Pilih </option>
							<?php
							$no = 1;
							$data = mysqli_query($Koneksi, "select * from tarif");
							while ($d = mysqli_fetch_array($data)) {

							?>
								<option value="<?= $d['kodetarif'] ?>"><?= $d['daya'] ?>/ Rp <?= $d['tarifperkwh'] ?></option>
							<?php
							}
							?>
						</select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Meteran</label>
                        <input type="text" class="form-control" name="nometer" placeholder="nometer" required>
                    </div>
                    <tr>
                        <td></td>
                        <td><input type="submit" Valuea="submit" class="btn btn-primary"></td>
                    </tr>
                    <a href="login.php" type="button" class="btn btn-danger">Kembali</a>
    </br>
                    </table>
                    </br>
                </form>
            </div> 
        </body>

</html>
