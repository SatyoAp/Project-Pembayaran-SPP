<?php
session_start();

if( isset($_SESSION['login'])){
	header("location: home.php");
	exit;
}

include 'koneksi.php';

$username=$_GET['username'];
$sandi=$_GET['sandi'];

if($username != null && $sandi != null ){
	$data = mysqli_query($koneksi, "select username, sandi from tbpetugas where username ='$username' and sandi ='$sandi'");
		$row = mysqli_fetch_assoc($data);
		if($username==$row['username'] && $sandi==$row['sandi']){
			// set sesion
			$_SESSION['login']= true;
			header('location: home.php');
			exit;
		}
		else{
	 		echo "<script>alert('Username atau Password Salah!!');</script>";
		}
}else{
	echo "<script>alert('username dan password tidak boleh kosong!!');</script>";
}
echo "<script>window.location='".('index.php')."';</script>";
?>