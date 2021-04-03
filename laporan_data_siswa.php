<?php  
session_start();
if(isset($_SESSION['login'])){
	include"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="view/laporan_siswa.css">
</head>
<body>
	<h3>LAPORAN DATA SISWA</h3>
	<hr/>
	<table width=100% border="1" cellspacing="0" cellpadding="4" id="t02">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
	</tr>
	<?php  
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa ORDER BY nis ASC");
	$no=1;
	while($d=mysqli_fetch_array($sqlSiswa)){
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[idsiswa]</td>
		<td>$d[namasiswa]</td>
		<td>$d[kelas]</td>
		<td>$d[tahunajaran]</td>
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