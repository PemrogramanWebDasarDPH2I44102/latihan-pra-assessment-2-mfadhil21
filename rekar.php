<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="nik" placeholder="nik"><br>
		<input type="text" name="nama" placeholder="nama"><br>
		<input type="password" name="pass" placeholder="pass"><br>
		<input type="password" name="repas" placeholder="re-pass"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php  
 class oop 
 {
 	private $nik;
 	private $nama;
 	private $pass;
 	private $que;
 	private $kon;

 	function tambah1($nik1, $nama1, $pass1, $repas1)
 	{
 		include "koneksi.php";
        $this->nik = $nik1;
    	if (strlen($nama1)<=20) {
        $this->nama = $nama1;
    	}
 		if($pass1=$repas1){
 			$this->pass=$pass1;
 		}else{
 			echo "password berbeda";
 		}
 		if (isset($this->pass)) {
 			$this->kon=$conn;
 			$this->que = mysqli_query($this->kon,"INSERT INTO karyawan(nik, nama, password) VALUES ('$this->nik','$this->nama','$this->pass')");
 			if (!$this->que) {
        		die("GAGAL");
      		}else{
        		echo "Berhasil";
        		header("Location:login.php");
 			}
 		}
 	}	
 }
 $c = new oop();
	if (isset($_POST['submit'])) {
	$c->tambah1($_POST['nik'],$_POST['nama'],$_POST['pass'],$_POST['repas']);
}
?>