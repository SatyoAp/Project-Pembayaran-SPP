<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Cetak</title>
</head>
<body>
	<center>
		<h2>Laporan Pembayaran SPP</h2>
		<h2>SMK N 13 Jakarta</h2>
	</center>

	<?php
	include 'koneksi.php'
	?>
	<table border="1" style="width:80%" align="center">
		<tr>
			<th>No</th>
			<th>No Faktur</th>
			<th>Nama Siswa</th>			
			<th>ID Petugas</th>
			<th>NIS</th>
			<th>Tanggal</th>
			<th>Bulan</th>
			<th>Total Bayar</th>
		</tr>
		<?php
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tbpembayaran order by nofaktur");
		while($d = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nofaktur']; ?></td>
				<td><?php echo $d['nama_siswa']; ?></td>
				<td><?php echo $d['id_petugas']; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['bulan']; ?></td>
				<td><?php echo $d['total_bayar']; ?></td>
			</tr>
			<?php 
		}
	?>
	</table>
	<script>
		window.print()
	</script>
</body>
</html>
