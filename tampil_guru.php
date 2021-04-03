<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="view/guru.css">
<center>
<h3>Data Guru</h3>
<table border="1" id="t01" style="text-align: center;">
	<tr>
		<th>No</th>
		<th>Nama Guru</th>
		<th>Aksi</th>
	</tr>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[namaguru]</td>
			<td>
				<a href='edit_guru.php?id=$d[idguru]'>Edit</a> /
				<a href='hapus_guru.php?id=$d[idguru]'>Hapus</a> /
				<a href='tambah_guru.php?id=$d[idguru]'>Tambah Guru</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>
</center>
<?php include "footer.php"; ?>