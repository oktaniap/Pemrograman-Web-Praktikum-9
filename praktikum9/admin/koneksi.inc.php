<?php
$host="localhost"; 
$username="root"; 
$password=""; 
mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
$con= mysqli_connect($host, $username, $password);
mysqli_select_db($con,"nia") or die("Database tidak dapat dibuka"); 
?>