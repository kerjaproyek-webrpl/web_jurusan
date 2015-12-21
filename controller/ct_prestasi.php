<?php 
	include "../config/connect.php";

	$id = $_POST['id_prestasi'];
	$sd = $_POST['sd1'];
	$sd2 = $_POST['sd2'];
	$sd3 = $_POST['sd3'];
	$smp = $_POST['smp1'];
	$smp2 = $_POST['smp2'];
	$smp3 = $_POST['smp3'];
	$smk = $_POST['smk1'];
	$smk2 = $_POST['smk2'];
	$smk3 = $_POST['smk3'];

	$q = mysql_query("UPDATE prestasi SET pressd = '$sd', 
										pressd2 = '$sd2',
										pressd3 = '$sd3',
										pressmp = '$smp',
										pressmp2 = '$smp2',
										pressmp3 = '$smp3',
										pressmk = '$smk',
										pressmk2 = '$smk2',
										pressmk3 = '$smk3'
					WHERE prestasi.id_prestasi = '$id' ");
	if ($q) {
		echo "
			<div class='alert alert-success'>
				<strong>Berhasil !</strong><p> simpan data</p>
			</div>
		";	
		header("Location: ../pages/siswa.php?pilih=prestasi");
	} else {
		echo "
			<div class='alert alert-danger'>
				<strong>Gagal !</strong><p> simpan data</p>
			</div>
		".$q;
	}
?>