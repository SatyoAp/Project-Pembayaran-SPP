<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style >
	.btn-tambah:link, .btn-tambah:visited {
	  background-color: #2196F3;
	  color: black;
	  padding: 10px 15px;
	  text-align: left;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 17px;
	  font-weight: bold;
	  border-radius: 5px;
	}

	.btn-tambah:hover, .btn-tambah:active {
	  background-color: #0b7dda;
	}
</style>
</head>
<body>
	<div class="judul p-t-20">
		<h2>DATA SISWA</h2>
	</div>
	<br/>
	<a href="tambahsiswa.php" class="btn-tambah">+Tambah Siswa</a> 			
	<br/>
	<br/>
	<table border="1">

<table id="tabel-data">
    <thead>
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Kelas</th>
			<th>Email</th>
			<th>No Telepon</th>
			<th>Tahun Masuk</th>
			<th>Aksi</th>
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
		$data = mysqli_query($koneksi,"select * from tbsiswa order by nis");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama_siswa']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_tlp']; ?></td>
				<td><?php echo $d['tahun_masuk']; ?></td>
				<td>
					<a href="editsiswa.php?nis=<?php echo $d['nis']; ?>"><input type="button" class="btn-edit"></a>
					<a href="hapussiswa.php?nis=<?php echo $d['nis']; ?>" onClick="return confirm('Yakin hapus data tersebut ??')";><input type="button" class="btn-delete"></a>
				</td>
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