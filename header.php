<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP</title>
	<link rel="stylesheet" type="text/css" href="view/header.css">

</head>
<body>
    <img src="image/head.jpg">
<ul>
<li><a class="active" href="index.php">Home</a></li>
<li><a href="tampil_admin.php">Data Admin</a></li>
<li><a href="tampil_guru.php">Data Guru</a></li>
<li><a href="tampil_walikelas.php">Data Wali Kelas</a></li>
<li><a href="tampil_siswa.php">Data Siswa</a></li>
<li><a href="transaksi.php">Transaksi</a></li>
<li><a href="laporan.php">Laporan</a></li>
<li><a href="logout.php">Logout</a><li>
</ul>