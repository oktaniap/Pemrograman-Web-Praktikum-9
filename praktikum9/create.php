<?php
$conn=mysqli_connect("localhost", "root", "");
if (!$conn) {
	die("Connection failed ".mysqli_connect_error());
}
$sql="CREATE DATABASE nia";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: ".mysqli_error($conn);
}
echo "<br>";
$conn=mysqli_connect("localhost", "root", "", "nia");
if (!$conn) {
	die("Connection failed ".mysqli_connect_error());
}
$sql="CREATE TABLE kontak(id INT(4) AUTO_INCREMENT PRIMARY KEY, Nama VARCHAR(30) NOT NULL, jkel VARCHAR(10), Email VARCHAR(40), Alamat VARCHAR(50), Pesan TEXT)";
if (mysqli_query($conn, $sql)) {
	echo "Table created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}
mysqli_close($conn)
?>