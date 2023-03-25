<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php';
session_start();
?>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Selamat Datang</title>
    <link rel="icon" href="img/icon.png">
</head>
<body style="background: url(img/bg.jpg); background-size: cover;" class="trans">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item" style="align: center;"> 
        <font size="5">Selamat Login</font>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a type="button" class="btn btn-dark" href="login.php">Login</a>
    </form>
  </div>
</nav>
<div style="padding-top: 100px;"> 
	<div class="container" style="background-color: white;">
		<h3 style="text-align: center; font-family: Georgia; font-size:30px">L O G I N</h3>
		<form action="proses-login.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" name="username" placeholder="username" required>
				<small id="emailHelp" class="form-text text-muted">Masukkan Dengan Benar</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">password</label>
				<input type="password" class="form-control" name="password" placeholder="password" required>
			</div>
			<input type="submit" class="btn btn-success" value="Login">
			<a href="index.php" class="btn btn-danger">Kembali</a>
		</form>
		<h8>jika tidak punya akun harap </h8><a href="registrasi.php">register</a>
        <br>
        </br>
	</div>
</body>

</html>