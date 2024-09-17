<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$notlp = $_POST['notlp'];
$username = $_POST['username'];
$sandi = $_POST['sandi'];

// update data ke database
mysqli_query($koneksi,"update tbpetugas set nama_petugas='$nama_petugas',alamat='$alamat',email='$email',notlp='$notlp',username='$username',sandi='$sandi' where id_petugas='$id_petugas'");

// mengalihkan halaman kembali tampil pelanggan
header("location:home.php?page=petugas");

?>