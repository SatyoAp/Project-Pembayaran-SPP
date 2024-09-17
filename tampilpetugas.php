<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
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
</style>
</head>
<body>
	<div class="judul p-t-20">
		<h2>DATA PETUGAS</h2>
	</div>
	<br/>
	<a href="tambahpetugas.php" class="btn-tambah">+ Tambah Petugas</a>
	<br/>
	<br/>
	<table border="1">

<table id="tabel-petugas">
    <thead>
		<tr>
			<th>No</th>
			<th>ID Petugas</th>
			<th>Nama Petugas</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No Telepon</th>
			<th>Username</th>
			<th>Sandi</th>
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
		$data = mysqli_query($koneksi,"select * from tbpetugas order by id_petugas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_petugas']; ?></td>
				<td><?php echo $d['nama_petugas']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['notlp']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['sandi']; ?></td>
				<td>
					<a href="editpetugas.php?id_petugas=<?php echo $d['id_petugas']; ?>"><input type="button" class="btn-edit"></a>
					<a href="hapuspetugas.php?id_petugas=<?php echo $d['id_petugas']; ?>" onClick="return confirm('Yakin hapus data tersebut ??')";><input type="button" class="btn-delete"></a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
	<script>
    $(document).ready(function(){
        $('#tabel-petugas').DataTable();
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