<?php
session_start();
include "koneksi.inc.php";
$username=$_POST['username'];
$password=$_POST['password'];
$data=mysqli_query($con, "SELECT * FROM admin where username='$username' and password='$password'");
$cek=mysqli_num_rows($data);
if ($cek>0) {
	$_SESSION['username']=$username;
	$_SESSION['status']="login";
	header("location:cetak.php");
} else{
	header("location:index.php?pesan=gagal");
}
?>