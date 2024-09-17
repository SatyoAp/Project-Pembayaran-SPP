<?php 
$koneksi = mysqli_connect("localhost","root","","pembayaran_spp");

// Cek Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>