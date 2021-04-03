<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="view/admin.css">
<center>
<h3>Data Admin</h3>
<table border="1" id="t01" style="text-align: center;">
	<tr>
		<th>No</th>
		<th>Nama Admin</th>
		<th>Aksi</th>
	</tr>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM admin ORDER BY idadmin ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[namalengkap]</td>
			<td>
				<a href='edit_admin.php?id=$d[idadmin]'>Edit</a> /
				<a href='hapus_admin.php?id=$d[idadmin]'>Hapus</a> /
				<a href='tambah_admin.php?id=$d[idadmin]'>Tambah Data</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table></center>

<?php include "footer.php"; ?>