<?php  
session_start();
if(isset($_SESSION['login'])){
	include"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Guru</title>
	<link rel="stylesheet" type="text/css" href="view/laporan_guru.css">
</head>
<body>
	<h3>LAPORAN DATA GURU</h3>
	<hr/>
	<table width=100% border="1" cellspacing="0" cellpadding="4" id="t02">
	<tr>
		<th style="width: 30px;">No.</th>
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

<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>Bandung, <?php echo date('d-m-y'); ?><br>Mengetahui,</p>
			<br/>
			<br/>
			<p>____________</p>
		</td>
	</tr>
</table>
<a href="#" class="on-print" onclick="window.print();">Cetak/Print</a>
</body>
</html>

<?php 
}else{
	header ('location:login.php');
 }
 ?>