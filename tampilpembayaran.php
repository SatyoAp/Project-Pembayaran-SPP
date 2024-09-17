<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style >
	.btn-tambah:link, .btn-tambah:visited {
	  background-color: #2196F3;
	  color: black;
	  padding: 10px 15px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 17px;
	  font-weight: bold;
	  border-radius: 5px;
	}

	.btn-tambah:hover, .btn-tambah:active {
	  background-color: #0b7dda;
	}

	.btn-cetak:link, .btn-cetak:visited {
	  background-color: #04AA6D;
	  color: black;
	  padding: 10px 15px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 17px;
	  font-weight: bold;
	  border-radius: 5px;
	}

	.btn-cetak:hover, .btn-cetak:active {
	  background-color: #46a049;
	}	
</style>
</head>
<body>
	<div class="judul p-t-20">
		<h2>LAPORAN PEMBAYARAN</h2>
	</div>
	<br/>
	<a href="cetak.php" class="btn-cetak" target="_blank"><i class="fa fa-print"></i> Cetak</a>			
	<br/>
	<br/>
	<table border="1">

<table id="tabel-data">
    <thead>
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
	</thead>
	<tbody>
		<?php
		if( !isset($_SESSION['login'])){
			header("location: index.php");
			exit;
		}
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbpembayaran order by nofaktur");
		while($d = mysqli_fetch_array($data)){
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
	</tbody>
	<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
	</table>
	<hr style="clear: both">
	<div class="halaman-02"> 
	    <h2></h2>
	    <p class="halaman-03"> Kelompok 2 Aplikasi Pembayaran SPP | Universitas Amikom Purwokerto</p>
	</div>
</body>
</html>