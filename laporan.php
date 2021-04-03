<?php include "header.php"; ?>
<h3>Laporan</h3>
<ul>
    <li><a href="laporan_data_guru.php" target="_blank">Laporan Data Guru</a></li>
    <li><a href="laporan_data_siswa.php" target="_blank">Laporan Data Siswa</a></li>
    <li>
        <strong>Laporan Pembayaran</strong><br/>
        <form method="GET" action="laporan_pembayaran_spp.php" target="_blank">
            Mulai Tanggal <input type="date" name="tgl1"value="<?php echo date('Y-m-d'); ?>" />
            Sampai Tanggal<input type="date" name="tgl2"value="<?php echo date('Y-m-d'); ?>" />
            <input type="submit" value="Tamplikan" />

        </form>
    </li>
</ul>
<?php include "footer.php" ?>