<?php 
	include '../config/connect.php';
	// include "../modal.php";
	$is = mysql_query("SELECT COUNT(*) FROM siswa");
	$sis = mysql_fetch_assoc($is);
	$n = $sis['COUNT(*)'];

	$a = mysql_query("SELECT * FROM siswa");

	$i = 1; 
	while ($b = mysql_fetch_assoc($a)) { 
		?>
		<tr>
			<td id="urut<?php echo $i; ?>"><?php echo $i; ?></td>
			<td id="nis<?php echo $i; ?>"><?php echo $b['nis']; ?></td>
			<td id="nama<?php echo $i; ?>"><?php echo $b['nama']; ?></td>
			<td id="tl<?php echo $i; ?>"><?php echo $b['tempat_lhr']; ?></td>
			<td id="tgl<?php echo $i; ?>"><?php echo $b['tgl_lhr']; ?></td>
			<td id="agama<?php echo $i; ?>"><?php echo $b['agama']; ?></td>
			<td id="aksi<?php echo $i; ?>">
				<button type="button" class="btn btn-primary btn-xs" onclick="btn_preview(<?php echo $i; ?>)"><i class="fa fa-eye"></i> Preview</button>
				<!-- <button type="button" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
				<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button> -->
			</td>
		</tr>
		<?php 
	$i++; 
	
	} 
?>