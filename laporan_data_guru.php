<?php  
session_start();
if(isset($_SESSION['login'])){
	include"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Guru</title>
</head>
<body>
	<h3>LAPORAN DATA GURU</h3>
	<hr/>
	<table width=100% border="1" cellspacing="0" cellpadding="4">
	<tr>
		<th>No.</th>
		<th>ID</th>
		<th>Nama Guru</th>
	</tr>
	<?php  
	$sqlGuru = mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	while($d=mysqli_fetch_array($sqlGuru)){
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[idguru]</td>
		<td>$d[namaguru]</td>
		</tr>";
		$no++;
	}
	?>
</table>
<a href="#" onclick="window.print();">Cetak/Print</a>
</body>
</html>

<?php 
}else{
	header ('location:login.php');
 }
 ?>
