<?php
session_start();
include"../koneksi.php";

$idpelanggan = $_POST['idpelanggan'];
$tanggal = $_POST['tanggal'];
$biaya = $_POST['biayaadmin'];
$admin = '2500';

$data = mysqli_query ($koneksi, " select  * from pelanggan, tarif where pelanggan.idpelanggan = $idpelanggan and tarif.kodetarif = pelanggan.kodetarif");
$row = mysqli_fetch_array ($data);
$harga = $biaya + $admin;

mysqli_query($Koneksi,"insert into pembayaran values('','$idpelanggan','$tanggal','$harga')");
header('location:../index.php');
