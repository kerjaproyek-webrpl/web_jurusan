	<?php 
//error_reporting(1);
include "config/config.php";

	$nis = $_POST["nisn"];
	$nama = $_POST["nm-lkp"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];

	$query = "INSERT INTO siswa values('$nis','$nama','$pass','','','','','','','','$email','',1);";
	// echo $query;
	if (mysql_query($query)) {
		echo "<div class='alert alert-success'>
				<strong>Berhasil !</strong> untuk melanjutkan klik 
				<a href='index.php?page=siswa'>Lanjut </a>
			</div>";
		// header("Location: ../index.php?page=siswa");
	} else {
		echo "Gagal : ".$query."<br>";
	}