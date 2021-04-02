<?php include "header.php"; ?>

<?php
$sqlEdit=mysqli_query($konek, "SELECT * FROM admin WHERE idadmin='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<h3>Edit Data Admin</h3>
<form method="post" action="">
	<input type="hidden" name="idadmin" value="<?php echo $e['idadmin']; ?>" />
	<table>
		<tr>
			<td>Nama Admin</td>
			<td><input type="text" name="namalengkap" value="<?php echo $e['namalengkap']; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update" /></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$id		= $_POST['idadmin'];
	$nama 	= $_POST['namalengkap'];
	
	if($nama==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses edit data admin
		$edit = mysqli_query($konek, "UPDATE admin SET namalengkap='$nama' WHERE idadmin='$id'");
		
		if(!$edit){
			echo "Edit data gagal!!";
		}else{
			header('location:tampil_admin.php');
		}
	}
}
?>

<?php include "footer.php"; ?>