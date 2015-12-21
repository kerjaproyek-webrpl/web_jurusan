<?php 
	include "../config/connect.php";

	$id = $_POST['id'];
	$nm = $_POST['nm_ayah'];
	$pkj = $_POST['pkj_ayah'];
	$tel = $_POST['telp_ayah'];
	$ag = $_POST['ag_ayah'];
	$tpt = $_POST['tmpt_lhr_ayah'];
	$tg = $_POST['tgl_ayah'];

	$c = mysql_query("UPDATE dt_ayah SET nama_ayah='$nm', pekerjaan_ayah='$pkj',no_telp_ayah='$tel',agama_ayah='$ag',tempat_lhr_ayah='$tpt',tgl_lhr_ayah='$tg' WHERE id_ayah = $id");
	if ($c) {
		header("Location: http://my21.io/web_jur/pages/siswa.php?pilih=dt_ayah");
	} else {
		echo "Gagal".$c;
	}