	<?php 
//error_reporting(1);
include "config/config.php";

	$nis = $_POST["nisn"];
	$nama = $_POST["nm-lkp"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];

	$query = "INSERT INTO siswa values('$nis','$nama','$pass','','','','','','','','$email','','','');";
	// echo $query;
	if (mysql_query($query)) {
		
	} else {
		echo "Gagal : ".$query."<br>";
	}