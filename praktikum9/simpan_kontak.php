<?php
//$host="localhost";
//$username="root";
//$password="";
//mysqli_connect($host,$username,$password)or die("Koneksi gagal dibangun");
//$con=mysqli_connect($host,$username,$password);
//mysqli_select_db($con,"nia")or die("Database tidak dapat dibuka");
include "admin/koneksi.inc.php";
//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
if($_POST=="L"){
	$vjkel="Laki-laki";
}else{
	$vjkel="Perempuan";
}
$vemail=$_POST['email'];
$valamat=$_POST['alamat']; 
$vkota=$_POST['kota']; 
$vpesan=$_POST['pesan']; 
$sql="insert kontak set nama='$vnama', jkel='$vjkel', email='$vemail', alamat='$valamat', kota='$vkota', pesan='$vpesan'"; 
mysqli_query($con,$sql) or die("Proses simpan ke database gagal");
mysqli_close($con); 
header("location:kontak.html"); 
?>