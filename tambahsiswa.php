<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
<style >
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
	input[type=button]{
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
	input[type=button]:hover {
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
	<div class="layout">
		<div class="judul p-t-25 p-b-2">
			<h2 align="center">TAMBAH DATA SISWA</h2>
		</div>
		<br/>
		<form method="post" action="tambahsiswa_aksi.php">
			<div>
			    <label>NIS</label>
			    <input type="number" name="nis" autocomplete="off" placeholder="NIS..">

			    <label>Nama Siswa</label>
			    <input type="text" name="nama_siswa" autocomplete="off" placeholder="Nama siswa..">

			    <label >Alamat</label>
			    <input type="text" name="alamat" autocomplete="off" placeholder="Alamat..">

			    <label >Jenis Kelamin</label>
			    <select name="jenis_kelamin" align="center">
					<option value="++">-----Pilih-----</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>

				<label >Kelas</label>
			    <input type="text" name="kelas" autocomplete="off" placeholder="Kelas..">

			    <label >Email</label>
			    <input type="text" name="email" autocomplete="off" placeholder="Email..">

				<label >No Telepon</label>
			    <input type="number" name="no_tlp" autocomplete="off" placeholder="No Telepon..">
		  		
		  		<label >Tahun Masuk</label>
			    <input type="number" name="tahun_masuk" autocomplete="off" placeholder="Tahun masuk..">
		  
			    <input type="submit" value="SIMPAN">
			    <input type="button" onclick="window.location.href='home.php?page=siswa'" class="kembali" value="KEMBALI">
			</div>
		</form>	
</div>
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