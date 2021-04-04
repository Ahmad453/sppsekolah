<?php include "header.php"; ?>
<h3>Laporan</h3>
<table class="lap">
<tr>
<ul>
    <th><li><a href="laporan_data_guru.php" target="_blank">Laporan Data Guru</a></li></th>
</tr>
<tr>
    <td><li><a href="laporan_data_siswa.php" target="_blank">Laporan Data Siswa</a></li><td>
</tr>
        <strong>Laporan Pembayaran</strong><br>
        <form method="GET" action="laporan_pembayaran_spp.php" target="_blank">
            Mulai Tanggal<input type="date" name="tgl1"value="<?php echo date('Y-m-d'); ?>" />
            Sampai Tanggal<input type="date" name="tgl2"value="<?php echo date('Y-m-d'); ?>" />
            <input type="submit" value="Tamplikan" />

        </form>
    </li>
</ul>
</table>
<?php include "footer.php" ?>