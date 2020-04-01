<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_GET['pesan'])) {
			if ($_GET['pesan']=="gagal") {
				echo "Login gagal! username dan password salah!";
			} elseif ($_GET['pesan']=="logout") {
				echo "Anda telah berhasil logout";
			} elseif ($_GET['pesan']=="belum_login") {
				echo "Anda harus login dahulu";
			}
	}
	?>
	<form method="POST" action="login.php">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="login" value="LOGIN">
	</form>
</body>
</html>