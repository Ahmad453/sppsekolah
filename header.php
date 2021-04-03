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
 <div class="header">
      <div class="header-list">
        <ul>
          <li class="bayar">Aplikasi Pembayaran Spp</li>
       </ul>
      </div>
    </div>
    <div class="dropdown">
  <button class="dropbtn">Pilih Opsi</button>
  <div class="dropdown-content">
<a href="tampil_admin.php">Data Admin</a>
<a href="tampil_guru.php">Data Guru</a>
<a href="tampil_walikelas.php">Data Wali Kelas</a>
<a href="tampil_siswa.php">Data Siswa</a>
<a href="transaksi.php">Transaksi</a>
<a href="laporan.php">Laporan</a>
<a href="logout.php">Logout</a>
</div>
</div>