<?php
	include "../config/connect.php";
	
	$nis = $_POST['nisn'];
	$nm = $_POST['nama'];
	$al = $_POST['alamat'];
	$ag = $_POST['agama'];
	$tl = $_POST['tempat_lhr'];
	$tgl = $_POST['tgl_lhr'];

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
	move_uploaded_file($_FILES['image']['tmp_name'], $folder_simpan.basename($nama_jadi));
	$fol = $folder_simpan.$nama_jadi;

	$q = mysql_query("UPDATE siswa SET nama = '$nm' , tempat_lhr = '$tl', tgl_lhr='$tgl', agama='$ag', alamat='$al', foto='$fol' WHERE nis='$nis'");
	if ($q) {
		echo "
			<div class='alert alert-success'>
				<strong>Berhasil !</strong><p> simpan data</p>
			</div>
		";
		header("Location: ../pages/siswa.php?pilih=dt_diri");
	} else {
		echo "
			<div class='alert alert-danger'>
				<strong>Gagal !</strong><p> simpan data</p>
			</div>
		".$q;
	}