<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
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
			<h2 align="center">TAMBAH DATA PETUGAS</h2>
		</div>
		<br/>
		<form method="post" action="tambahpetugas_aksi.php">
			<div>
			    <label>Id Petugas</label>
			    <input type="text" name="id_petugas" autocomplete="off" placeholder="Id petugas..">

			    <label>Nama Petugas</label>
			    <input type="text" name="nama_petugas" autocomplete="off" placeholder="Nama Petugas..">

			    <label >Alamat</label>
			    <input type="text" name="alamat" autocomplete="off" placeholder="Alamat..">

			    <label >Email</label>
			    <input type="text" name="email" autocomplete="off" placeholder="Email..">

				<label >No Telepon</label>
			    <input type="number" name="notlp" autocomplete="off" placeholder="No Telepon..">
		  		
		  		<label >Username</label>
			    <input type="text" name="username" autocomplete="off" placeholder="Username..">
		  
		  		<label >Sandi</label>
			    <input type="text" name="sandi" autocomplete="off" placeholder="Kata sandi..">
		  
			    <input type="submit" value="SIMPAN">
			    <input type="button" onclick="window.location.href='home.php?page=petugas'" class="kembali" value="KEMBALI">
			</div>
		</form>	
</div>
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'petugas':
				include "tampilpetugas.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>