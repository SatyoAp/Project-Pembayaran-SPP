<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	$id_petugas = $_GET['id_petugas'];
	$data = mysqli_query($koneksi,"select * from tbpetugas where id_petugas='$id_petugas'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="editpetugas_aksi.php">
			<div class="layout">
				<div class="judul p-t-25 p-b-2">
					<h2 align="center">EDIT DATA PETUGAS</h2>
				</div>
				<br/>
				<div>
				    <label>Id Petugas</label>
				    <input type="hidden" name="id_petugas" value="<?php echo $d['id_petugas']; ?>">
					<input type="text" name="nama_petugas" value="<?php echo $d['nama_petugas']; ?>">

				    <label >Alamat</label>
				    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">

				    <label >Email</label>
				    <input type="text" name="email" value="<?php echo $d['email']; ?>">

					<label >No Telepon</label>
				   	<input type="number" name="notlp" value="<?php echo $d['notlp']; ?>">
			  		
			  		<label >Username</label>
				   	<input type="text" name="username" value="<?php echo $d['username']; ?>">

			  		<label >Sandi</label>
				   	<input type="text" name="sandi" value="<?php echo $d['sandi']; ?>">
			  
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
