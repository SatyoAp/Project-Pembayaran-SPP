<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul"></h1>
		<h3 class="deskripsi"></h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="home.php?page=beranda">BERANDA</a></li>
  			<li><a href="home.php?page=siswa">SISWA</a></li>
  			<li><a href="home.php?page=petugas">PETUGAS</a></li>
  			<li><a href="home.php?page=transaksi">TRANSAKSI</a></li>
  			<li><a href="home.php?page=pembayaran">LAPORAN</a></li>
			<li><a href="home.php?page=tentang">TENTANG</a></li>
			<li class="logout"><a href="logout.php" onclick="return confirm('Yakin untuk logout?')";>LOGOUT</a></li>
		</ul>
	</div>

    <div class="badan">
	<?php 
	session_start();

	if( !isset($_SESSION['login'])){
		header("location: index.php");
		exit;
	}
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'beranda':
				include "beranda.php";
				break;			
			case 'siswa':
				include "tampilsiswa.php";
				break;	
			case 'petugas':
				include "tampilpetugas.php";
				break;
			case 'transaksi':
				include "tambahpembayaran.php";
				break;
			case 'pembayaran':
				include "tampilpembayaran.php";
				break;
			case 'tentang':
				include "tentang.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "beranda.php";
	}

	 ?>
   </div>
</div>
</body>
</html>