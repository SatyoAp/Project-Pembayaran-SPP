<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pembayaran
$nofaktur = $_POST['nofaktur'];
$nama_siswa = $_POST['nama_siswa'];
$id_petugas = $_POST['id_petugas'];
$nis = $_POST['nis'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$total_bayar = $_POST['total_bayar'];

if($nofaktur != null && $nama_siswa != null && $id_petugas != null && $nis != null && $tanggal != null && $bulan != null && $total_bayar != null){
// menginput data ke database
	$query= mysqli_query($koneksi,"insert into tbpembayaran values('$nofaktur','$nama_siswa','$id_petugas','$nis','$tanggal','$bulan','$total_bayar')");

// mengalihkan halaman kembali ke tampilpembayaran.php
	header("location:home.php?page=pembayaran");
}else{
	echo "<script>alert('Data tidak boleh kosong!!');</script>";
}
echo "<script>window.location='".('home.php?page=transaksi')."';</script>";
?>