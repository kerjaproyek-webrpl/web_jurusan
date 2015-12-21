<?php 
	include "../config/connect.php";

	$id = $_POST['id'];
	$nm = $_POST['nm_ibu'];
	$pkj = $_POST['pkj_ibu'];
	$tel = $_POST['telp_ibu'];
	$ag = $_POST['ag_ibu'];
	$tpt = $_POST['tmpt_lhr_ibu'];
	$tg = $_POST['tgl_ibu'];

	$c = mysql_query("UPDATE dt_ibu SET nama_ibu='$nm', pekerjaan_ibu='$pkj',no_telp_ibu='$tel',agama_ibu='$ag',tempat_lhr_ibu='$tpt',tgl_lhr_ibu='$tg' WHERE id_ibu = $id");
	if ($c) {
		header("Location: http://my21.io/web_jur/pages/siswa.php?pilih=dt_ibu");
	} else {
		echo "Gagal".$c;
	}