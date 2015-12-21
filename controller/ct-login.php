<?php 
	session_start();
	include '../config/connect.php';
	$nis = $_POST["nisn"];
	$psw = base64_encode($_POST["pass"]);
	$query = "SELECT nis, nama, pass, level FROM siswa WHERE nis='$nis' AND pass='$psw';";
	$eks = mysql_query($query);
	$row = mysql_num_rows($eks);
	$assoc = mysql_fetch_assoc($eks);
	// print_r($assoc);
	if ($row > 0) {
		$_SESSION['status'] = 1;
		$_SESSION['nis'] = $assoc['nis'];
		$_SESSION['user'] = $assoc['nama'];
		$_SESSION['level'] = $assoc['level'];
		if ($_SESSION['nis'] && $_SESSION['level'] == 2) {
			header("Location: ../pages/siswa.php?pilih=dt_diri");
		} else {
			echo "maaf, anda belum terdaftar dalam database kami";
		}
	} else {
		echo "Login gagal";
		$_SESSION['status'] = 0;
	}
 ?>