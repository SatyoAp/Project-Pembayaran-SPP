<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$no_tlp = $_POST['no_tlp'];
$tahun_masuk = $_POST['tahun_masuk'];

// update data ke database
mysqli_query($koneksi,"update tbsiswa set nis='$nis',nama_siswa='$nama_siswa',alamat='$alamat',jenis_kelamin='$jenis_kelamin',kelas='$kelas',email='$email',no_tlp='$no_tlp',tahun_masuk='$tahun_masuk'where nis='$nis'");

// mengalihkan halaman kembali tampil siswa
header("location:home.php?page=siswa");

?>