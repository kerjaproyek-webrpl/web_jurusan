<?php 
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "db_web";
	$kon = mysql_connect($host, $user, $pass);
	$pilih = mysql_select_db($db);
	if(!$kon) {
		die("Database tidak ditemukan");
	}
 ?>