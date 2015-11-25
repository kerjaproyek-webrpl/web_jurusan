<?php 
	include 'config/config.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$q = "SELECT * FROM admin where username='$user' AND pass='$pass'";
	$eks = mysql_query($q);
	$cek = mysql_num_rows($eks);
	$assoc = mysql_fetch_assoc($eks);
	// print_r($assoc);
	if ($cek > 0) {
		$_SESSION['status']=1;
		$_SESSION['user']=$assoc['username'];
		$_SESSION['level']=$assoc['level'];
			if ($_SESSION['user'] == 'admin' AND $_SESSION['level'] == 2) {
				header("location: pages/administrator/");
			} else {
				echo "Maaf, anda tidak berhak masuk";
			}
	} else {
		echo "Maaf, anda belum terdaftar sebagai admin";
		$_SESSION['status']=0;
		$_SESSION['level']=0;
	}
 ?>