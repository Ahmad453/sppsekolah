<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="view/siswa.css">
<center>
<h3>Data Siswa</h3>
<table border="1" id="t01" style="text-align: center;">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
		<th>Biaya</th>
		<th>Aksi</th>
	</tr>

	<?php 
	$sql = mysqli_query($konek,"select * from siswa order by kelas asc");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[nis]</td>
			<td>$d[namasiswa]</td>
			<td>$d[kelas]</td>
			<td>$d[tahunajaran]</td>
			<td>$d[biaya]</td>
			<td>
				<a href='edit_siswa.php?id=$d[idsiswa]'>Edit</a> /
				<a href='hapus_siswa.php?id=$d[idsiswa]'>Hapus</a> /
				<a href='Tambah_siswa.php?id=$d[idsiswa]'>Tambah Siswa</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<p>Menghapus siswa berarti juga menghapus tagihan siswa...</p></center>

<?php include "footer.php"; ?>