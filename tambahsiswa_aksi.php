<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah siswa
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$no_tlp = $_POST['no_tlp'];
$tahun_masuk = $_POST['tahun_masuk'];

if($nis != null && $nama_siswa != null && $alamat != null && $jenis_kelamin != null && $kelas != null && $email!= null && $no_tlp != null && $tahun_masuk != null){
// menginput data ke database
	$sql= mysqli_query($koneksi,"insert into tbsiswa values('$nis','$nama_siswa','$alamat','$jenis_kelamin','$kelas','$email','$no_tlp','$tahun_masuk')");
// mengalihkan halaman kembali ke tampilsiswa.php
	header("location:home.php?page=siswa");
}else{
	echo "<script>alert('Data tidak boleh kosong')</script>";
}
echo "<script>window.location='".('tambahsiswa.php')."';</script>";




?>