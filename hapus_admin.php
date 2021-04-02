<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
	$hapus = mysqli_query($konek, "DELETE FROM admin WHERE idadmin='$_GET[id]'");
	
	if($hapus){
		header('location:tampil_admin.php');
	}else{
		echo "Hapus data gagal, data admin digunakan di tabel guru<br>
			<a href='tampil_admin.php'><<< Kembali</a>";
	}
}else{
	echo "Anda tidak memiliki akses ke halaman ini!!!";
}
?>