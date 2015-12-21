<?php 
	include "../config/connect.php";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kerja = $_POST['pekerjaan'];
	$uang = $_POST['penghasilan'];
	$telp = $_POST['notelp'];
	$agama = $_POST['agama'];
	$lahir = $_POST['tempat_lhr'];
	$tgl = $_POST['tgl_lhr'];


	$q = mysql_query("UPDATE dt_ayah SET nama_ayah = '$nama', 
					  pekerjaan_ayah = '$kerja',
					  penghasilan = '$uang',
					  no_telp_ayah = '$telp',
					  agama_ayah = '$agama',
					  tempat_lhr_ayah = '$lahir',
					  tgl_lhr_ayah = '$tgl'
					  WHERE id_ayah = '$id'");

	if ($q) {
		echo "
			<div class='alert alert-success'>
				<strong>Berhasil !</strong><p> simpan data</p>
			</div>
		";
		header("Location: ../pages/siswa.php?pilih=dt_ayah");
	} else {
		echo "
			<div class='alert alert-danger'>
				<strong>Gagal !</strong><p> simpan data</p>
			</div>
		".$q;
	}
?>