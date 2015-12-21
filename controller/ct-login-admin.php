<?php 
	session_start();
	include '../config/connect.php';

	$user = $_POST["username"];
	$psw = $_POST["pass"];
	$query = "SELECT * FROM admin WHERE username='$user' AND pass='$psw';";
	$eks = mysql_query($query);
	$row = mysql_num_rows($eks);
	$assoc = mysql_fetch_assoc($eks);
	print_r($assoc);
	if ($row > 0) {
		
		$_SESSION['status'] = 1;
		$_SESSION['id'] = $assoc['id'];
		$_SESSION['user'] = $assoc['nama'];
		$_SESSION['level'] = $assoc['level'];

		if ($_SESSION['id'] && $_SESSION['level'] == 1) {
			header("Location: ../pages/admin.php");
		} else {
			echo "maaf, anda belum terdaftar dalam database kami";
		}
	} else {
		echo "Login gagal";
		$_SESSION['status'] = 0;
	}