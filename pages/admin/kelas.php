<?php 
	include '../config/connect.php';
	$is = mysql_query("SELECT COUNT(*) FROM siswa");
	$sis = mysql_fetch_assoc($is);
	$n = $sis['COUNT(*)'];

	$a = mysql_query("SELECT siswa.nama, kelas.nama_kelas
					FROM siswa INNER JOIN kelas
					ON siswa.id_kelas = kelas.id_kelas;");
	$b = mysql_fetch_assoc($a);

 ?>
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="http://my21.io/web_jur/pages/admin.php">Dashboard</a></li>
			<li class="active">Kelas</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12" id="panel3">
		<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Data Kelas</h4>
			</div>
			<div class="panel-body">
				<div id="example_wrapper" class="dataTables_wrapper">
					<table id="example" class="table table-bordered table-hovered tbl-dt" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th style="width:3%;">No</th>
								<th style="width:15%;">Nama</th>
								<th style="width:15%;">Kelas</th>
								<th style="width:15%;">Aksi</th>
							</tr>
						</thead>
						<?php for ($i=1; $i<= $n; $i++ ) {  ?>
						<tbody>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $b['nama']; ?></td>
								<td><?php echo $b['nama_kelas']; ?></td>
								<td>
									<button type="button" class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></button>
									<button type="button" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
									<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
		<!-- end panel -->
	</div>
</div>