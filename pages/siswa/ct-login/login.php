<?php 
	include ("config/config.php");

	$nis = $_POST["nisn"];
	$pass = $_POST["password"];
	$query = "SELECT nis, nama, password, level FROM siswa where nis='$nis' AND password='$pass'";
	$eks = mysql_query($query);
	$row = mysql_num_rows($eks);
	$assoc = mysql_fetch_assoc($eks);
	// print_r($assoc);
	if ($row > 0) {
		$_SESSION['status'] = 1;
		$_SESSION['user'] = $assoc['nama'];
		$_SESSION['level'] = $assoc['level'];
		if ($_SESSION['user'] && $_SESSION['level'] == 1) {
			header("Location: pages/admin_sis/");
		} else {
			echo "Maaf, anda harus daftar terlebih dahulu";
		}
	} else {
		echo "Maaf, login gagal";
		$_SESSION['status'] = 0;
		$_SESSION['level'] = 0;
	}
 ?>