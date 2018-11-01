<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST"	action="">
		<input type="text" name="nik" placeholder="NIK Karyawan"><br>
		<input type="text" name="pass" placeholder="Password Karyawan"><br>
		<input type="submit" name="submit" value="submit"><br>
		<a href="rekar.php">Registrasi Karyawan</a>
	</form>
</body>
</html>

<?php  
	include "koneksi.php";

	if(isset($_POST['submit'])){
		session_start();
		$query= mysqli_query($conn, "SELECT * FROM karyawan");
			while ($acc = mysql_fetch_array($query)) {
				if ($acc['nik']==$_POST['nik']&&$acc['pass']==$_POST['pass']) {
					$_SESSION['nik'] = $acc['nik'];
					header("location: list_paket.php");	
				}
			}
		}
?>