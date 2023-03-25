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
    <title> Cetak Laporan pembayaran </title>
</head>
<div style="padding-top: 50px;">
<h2 style="text-align: center; font-family:Copperplate;">Laporan Pembayaran Listrik</h2>
<body >
    <table class="table table-dark table-striped" border='1'>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Biaya Admin</th>
            <th>Harga Total</th>

            <?php
            $no = 1;
            $data = mysqli_query($Koneksi, "select * from pembayaran, pelanggan where pembayaran.idpelanggan = '$_SESSION[idpelanggan]' and pembayaran.idpelanggan = pelanggan.idpelanggan");
            while ($d = mysqli_fetch_array($data)) {
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['username']; ?> </td>
            <td><?php echo $d['tanggal']; ?> </td>
            <td>Rp. 2500</td>
            <td>Rp. <?php echo $d['biaya']; ?> </td> 
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