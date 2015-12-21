<?php 
error_reporting(1);
	// base connect
	include "../config/connect.php";
	include "../config/qrcode.php";

	// $_POST
	$nis = $_POST["nisn"];
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$psw = base64_encode($_POST["pass"]);
	// echo base64_decode("YXN1");
	$qr = new QRGenerator();
	$qr->setData($nama);

	$qr = "<img src=".$qr->oyisam().">";

	// Auto increment KW
	$r = mysql_query("SELECT COUNT(*)+1 FROM siswa");
	$u = mysql_fetch_assoc($r);
	$n = $u["COUNT(*)+1"];
	// print_r($u);
	
	// query
	$query = "INSERT INTO siswa VALUES('$nis','$nama','$psw','$qr','','','','','',2,$n,$n,$n,$n,$n,$n,$n,$n,$n);";
	$sql = mysql_query($query);
	$query2 = "INSERT INTO kelas VALUES(DEFAULT,'');";
	$sql2 = mysql_query($query2);
	$query3 = "INSERT INTO prestasi VALUES(DEFAULT,'');";
	$sql3 = mysql_query($query3);
	$query4 = "INSERT INTO pendidikan VALUES(DEFAULT,'');";
	$sql4 = mysql_query($query4);
	$query5 = "INSERT INTO dt_ayah VALUES(DEFAULT,'','','','','','','');";
	$sql5 = mysql_query($query5);
	$query6 = "INSERT INTO dt_ibu VALUES(DEFAULT,'','','','','','','');";
	$sql6 = mysql_query($query6);
	$query7 = "INSERT INTO kesehatan VALUES(DEFAULT,'');";
	$sql7 = mysql_query($query7);
	$query8 = "INSERT INTO jurusan VALUES(DEFAULT,'');";
	$sql8 = mysql_query($query8);
	$query9 = "INSERT INTO email VALUES(DEFAULT,'');";
	$sql9 = mysql_query($query9);

	if ($sql&&$sql2&&$sql3&&$sql4&&$sql5&&$sql6&&$sql7&&$sql8&&$sql9) {
		echo "Berhasil";
	} else {
		echo " Gagal ".$query9;
	}
 ?>