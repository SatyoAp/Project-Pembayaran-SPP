<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah petugas
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$notlp = $_POST['notlp'];
$username = $_POST['username'];
$sandi = $_POST['sandi'];

if($id_petugas != null && $nama_petugas != null && $alamat != null &&  $email!= null && $notlp != null && $username != null && $sandi != null ){
// menginput data ke database
	$query= mysqli_query($koneksi,"insert into tbpetugas values('$id_petugas','$nama_petugas','$alamat','$email','$notlp','$username','$sandi')");
// mengalihkan halaman kembali ke tampilpetugas.php
	header("location:home.php?page=petugas");
}else{
	echo "<script>alert('Data tidak boleh kosong')</script>";
}
echo "<script>window.location='".('tambahpetugas.php')."';</script>";
?>