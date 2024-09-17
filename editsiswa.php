<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	body{
		background-color: #FFE4B5;
	}
	input[type=number], select {
	  margin-left: 40px;
	  margin-right: 40px;
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	input[type=text], select {
	  margin-left: 40px;
	  margin-right: 40px;
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	input[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}
	input[class=kembali] {
	  width: 100%;
	  background-color: #008B8B;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #2E8B57;
	}
	input[class=kembali]:hover {
	  background-color: #6495ED;
	}

	div {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
	.layout{
		margin-left: 80px;
		margin-right: 80px;
	}
</style>
</head>
<body>
	<?php
	include 'koneksi.php';
	$nis= $_GET['nis'];
	$data = mysqli_query($koneksi,"select * from tbsiswa where nis='$nis'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="editsiswa_aksi.php">
			<div class="layout">
				<div class="judul p-t-25 p-b-2">
					<h2 align="center">EDIT DATA SISWA</h2>
				</div>
				<br/>
				<div>
				    <label>NIS</label>
				    <input type="hidden" name="nis" value="<?php echo $d['nis']; ?>">
					<input type="text" name="nama_siswa" value="<?php echo $d['nama_siswa']; ?>">

				    <label >Alamat</label>
				    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">

				    <label >Jenis Kelamin</label>
				    <input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">

					<label >Kelas</label>
				    <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">

				    <label >Email</label>
				    <input type="text" name="email" value="<?php echo $d['email']; ?>">

					<label >No Telepon</label>
				   	<input type="text" name="no_tlp" value="<?php echo $d['no_tlp']; ?>">
			  		
			  		<label >Tahun Masuk</label>
			    	<input type="number" name="tahun_masuk" value="<?php echo $d['tahun_masuk']; ?>">
		  
				    <input type="submit" value="SIMPAN">
					<input type="button" class="kembali" onclick="history.back(-1)" value="KEMBALI"	>	
			</div>
		</form>
		<?php 
	}
	?>

	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'siswa':
				include "tampilsiswa.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>