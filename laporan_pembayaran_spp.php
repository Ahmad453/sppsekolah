<?php  
session_start();
if(isset($_SESSION['login'])){
	include"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Pembayran Spp</title>
	<link rel="stylesheet" type="text/css" href="view/pembayaran.css">
</head>
<body>
	<h3>LAPORAN PEMBAYARAN SPP</h3>
	<hr/>
	<p>Dari Tanggal : <?php echo $_GET['tgl1'];" - ".$_GET['tgl2'] ?></p>
	<table width=100% border="1" cellspacing="0" cellpadding="4" id="t02">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>No. Pembayaran</th>
		<th>Pembayaran Bulan</th>
		<th>Jumlah Pembayaran</th>
		<th>Keterangan</th>
	</tr>
	<?php  
	$sqlBayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
									WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
									ORDER BY nobayar ASC");
	$no=1;
	$total = 0;
	while($d=mysqli_fetch_array($sqlBayar)){
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[nis]</td>
		<td>$d[namasiswa]</td>
		<td>$d[kelas]</td>
		<td>$d[nobayar]</td>
		<td>$d[bulan]</td>
		<td align='right'>$d[jumlah]</td>
		<td>$d[ket]</td>
		</tr>";
		$no++;
		$total += $d['jumlah'];
	}
	?>
	<tr>
		<td colspan="6" align="center">Total</td>
		<td align="right"><b><?php echo $total; ?></b></td>
		<td></td>
	</tr>
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