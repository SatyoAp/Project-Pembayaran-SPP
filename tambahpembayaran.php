<?php
if( !isset($_SESSION['login'])){
	header("location: index.php");
	exit;
}
?>
<!--===============================================================================================-->
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
	input[type=date], select {
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
	}
	.layout{
		margin-left: 80px;
		margin-right: 80px;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.form{
		text-align: left;
		margin-left: 15px;
		margin-right: 15px;
	}
</style>
</head>
<body>
	<div class="layout">
		<div class="judul p-t-25 p-b-10">
			<h2 align="center">TRANSAKSI PEMBAYARAN</h2>
		</div>
		<br/>
		<form method="post" action="tambahpembayaran_aksi.php">
			<div class="form">
			    <label >No Faktur</label>
			    <input type="number" name="nofaktur" autocomplete="off" placeholder="No Faktur..">

			    <label>Nama Siswa</label>
			    <input type="text" name="nama_siswa" autocomplete="off" placeholder="Nama Siswa..">

			    <label>ID Petugas</label>
			    <select type="text" name="id_petugas">
			    <option value="++">-----Pilih-----</option>
			    <?php
			    include "koneksi.php";
			    $query = mysqli_query($koneksi, "select * from tbpetugas") or die (mysql_error($koneksi));
			    while($data = mysqli_fetch_array($query)){
			    	echo "<option value=$data[id_petugas]> $data[id_petugas]</option>";
			    }
			    ?>
				</select>

			    <label>NIS</label>
			    <select type="number" name="nis">
			    <option value="++">-----Pilih-----</option>
			    <?php
			    include "koneksi.php";
			    $query = mysqli_query($koneksi, "select * from tbsiswa") or die (mysql_error($koneksi));
			    while($data = mysqli_fetch_array($query)){
			    	echo "<option value=$data[nis]> $data[nis]</option>";
			    }
			    ?>
				</select>

			    <label >Tanggal Bayar</label>
			    <input type="date" name="tanggal" autocomplete="off" placeholder="tanggal..">

			    <label >Bulan</label>
			    <select type="text" name="bulan">
					<option value="++">-----Pilih-----</option>
					<option value="Januari">Januari</option>
					<option value="Februari">Februari</option>
					<option value="Maret">Maret</option>
					<option value="April">April</option>
					<option value="Mei">Mei</option>
					<option value="Juni">Juni</option>
					<option value="Juli">Juli</option>
					<option value="Agustus">Agustus</option>
					<option value="September">September</option>
					<option value="Oktober">Oktober</option>
					<option value="November">November</option>
					<option value="Desember">Desember</option>
				</select>

				<label >Total Bayar</label>
				<select type="number" name="total_bayar">
					<option value="++">-----total-----</option>
					<option value="200000">Rp. 200.000</option>
		  
			    <input type="submit" value="SIMPAN">
			</div>
		</form>	
</div>
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'pembayaran':
				include "tampilpembayaran.php";
				break;		
		}
	}
	 ?>
	<hr style="clear: both">
	<div class="halaman-02"> 
	    <h2></h2>
	    <p class="halaman-03"> Kelompok 2 Aplikasi Pembayaran SPP | Universitas Amikom Purwokerto</p>
	</div>

</body>
</html>