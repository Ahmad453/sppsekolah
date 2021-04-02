<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="wali.css">
<center>
<h3>Data Kelas dan Wali Kelas</h3>
<table border="1" id="t01" style="text-align: center;">
	<tr>
		<th>No.</th>
		<th>Nama Kelas</th>
		<th>Nama Wali Kelas</th>
		<th>Aksi</th>
	</tr>
	<?php
	$sql = mysqli_query($konek, "SELECT walikelas.kelas,guru.namaguru
								FROM walikelas
								INNER JOIN guru ON walikelas.idguru=guru.idguru
								ORDER BY walikelas.kelas ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[kelas]</td>
			<td>$d[namaguru]</td>
			<td>
				<a href='edit_walikelas.php?kls=$d[kelas]'>Edit</a> / 
				<a href='hapus_walikelas.php?kls=$d[kelas]'>Hapus</a> /
				<a href='tambah_walikelas.php?kls=$d[kelas]'>Tambah Data</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>
</center>
<?php include "footer.php"; ?>