<?php 
	error_reporting(1);
	session_start();

	include '../config/connect.php';

	$folder_simpan = '../images/siswa/';
	$folder = '../images/siswa/';
	$gambar = $_FILES['image']['name'];
	$gambar_jenis = $_FILES['image']['type'];

	$nama_gmbr = pathinfo($gambar,PATHINFO_FILENAME);
	$ext_gmbr = pathinfo($gambar,PATHINFO_EXTENSION);
	$i = 1;
	while(file_exists($folder_simpan.$nama_gmbr."($i)".'.'.$ext_gmbr)){
	    $i++;
	}
	$nama_jadi = $nama_gmbr."($i)".'.'.$ext_gmbr;
	$gambar_simpan = $folder_simpan.basename($nama_jadi);
	//-----------------
	move_uploaded_file($_FILES['file']['tmp_name'], $folder_simpan.basename($nama_jadi));
	$fol = $folder_simpan.$nama_jadi;
	$tgl = date('Y-m-d');
	$nisn = $_SESSION['nis'];

	//------------------------------
	$query = "INSERT INTO upl_gambar VALUES('$nisn','$fol','$tgl',DEFAULT)";
	$q = mysql_query($query);
	echo $query;
	if ($q) {
		echo "Berhasil";
	} else {
		echo "Gagal";
	}
	
