<?php 
	
	include "../config/connect.php";

	$id = $_SESSION['nis'];

	$show = mysql_query("SELECT * FROM prestasi INNER JOIN siswa WHERE prestasi.id_prestasi = siswa.id_prestasi && siswa.nis = '$id' ");
	$assoc = mysql_fetch_assoc($show);
 ?>