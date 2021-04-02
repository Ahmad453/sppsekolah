<?php include "header.php"; ?>

<h3>Tambah Data Admin</h3>
<form method="post" action="">
	<table>
		<tr>
			<td>Nama Admin</td>
			<td><input type="text" name="namaadmin" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$nama = mysqli_real_escape_string($konek, $_POST['namaadmin']);
	
	if($nama==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses simpan data admin
		$simpan = mysqli_query($konek, "INSERT INTO admin(namalengkap) VALUES ('$nama')");
		
		if(!$simpan){
			echo "Simpan data gagal!!";
		}else{
			header('location:tampil_admin.php');
		}
	}
}
?>

<?php include "footer.php"; ?>