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
<h2 style="text-align: center; font-family:Copperplate;">Laporan Pembayaran Listrik</h2>
<br></br>
<body>
    <table class="table table-dark table-striped" border='1'>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Biaya Admin</th>

            <?php
            $no = 1;
            $data = mysqli_query($Koneksi, "select * from pembayaran, pelanggan where pembayaran.idpelanggan = pelanggan.idpelanggan");
            while ($d = mysqli_fetch_array($data)) {
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['username']; ?> </td>
            <td><?php echo $d['tanggal']; ?> </td>
            <td><?php echo $d['biaya']; ?> </td>
        </tr>
    <?php
            }
    ?>

    </table>
</body>
<script>
		window.print();
	</script>
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