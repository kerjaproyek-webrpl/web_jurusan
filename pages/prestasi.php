<?php include "../controller/cfg_prestasi.php"; ?>

<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="http://my21.io/web_jur/pages/siswa.php">Dashboard</a></li>
			<li class="active">Prestasi</li>
		</ol>
	</div>
</div>
<div class="row">
	<!-- begin col-6 -->
	<div class="col-md-8" id="panel1">
		<!-- begin panel -->
		<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Prestasi</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="../controller/ct_prestasi.php">
				<table class="table">
					<tr>
						<td>
							<div class="form-group">
								<label class="col-md-4 control-label">ID Prestasi</label>
								<div class="col-md-8">
									<input type="text" name="id_prestasi" class="form-control"  value="<?php echo $assoc['id_prestasi']; ?>" readonly="on" placeholder="ID Prestasi" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Tingkat SD</label>
								<div class="col-md-8">
									<input type="text" name="sd1" class="form-control" value="<?php echo $assoc['pressd']; ?>" placeholder="Prestasi 1" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-8">
									<input type="text" name="sd2" class="form-control" value="<?php echo $assoc['pressd2']; ?>" placeholder="Prestasi 2" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-8">
									<input type="text" name="sd3" class="form-control" value="<?php echo $assoc['pressd3']; ?>" placeholder="Prestasi 3" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Tingkat SMP</label>
								<div class="col-md-8">
									<input type="text" name="smp1" class="form-control" value="<?php echo $assoc['pressmp']; ?>" placeholder="Prestasi 1" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-8">
									<input type="text" name="smp2" class="form-control" value="<?php echo $assoc['pressmp2']; ?>" placeholder="Prestasi 2" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-8">
									<input type="text" name="smp3" class="form-control" value="<?php echo $assoc['pressmp3']; ?>" placeholder="Prestasi 3" />
								</div>
							</div>
						</td>

						<td>
							<div class="form-group">
								<label class="col-md-4 control-label">Tingkat SMK</label>
								<div class="col-md-8">
									<input type="text" name="smk1" class="form-control" value="<?php echo $assoc['pressmk']; ?>" placeholder="Prestasi 1" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-8">
									<input type="text" name="smk2" class="form-control" value="<?php echo $assoc['pressmk2']; ?>" placeholder="Prestasi 2" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-8">
									<input type="text" name="smk3" class="form-control" value="<?php echo $assoc['pressmk3']; ?>" placeholder="Prestasi 3" />
								</div>
							</div>
							<div class="col-md-offset-9">
								<button type="submit" name="update" class="btn btn-sm btn-success">Simpan <i class="fa fa-save"></i></button>
							</div>
						</td>
					</tr>
				</table>
					
				</form>
			</div>
		</div>
		<!-- end panel -->
	</div>
	<!-- end col-6 -->
	<!-- begin col-6 -->
	<!-- <div class="col-md-4" id="panel2">
		begin panel
		<div class="panel panel-inverse" data-sortable-id="form-stuff-2">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Input Sizes, Input Group</h4>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="text-center">
						<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
						<h6>Unggah foto baru</h6>
						<input type="file" class="form-control" value="No file" >
					</div>
				</div>
				<div class="form-group">
					<?php echo $assoc['qr']; ?>
				</div>
			</div>
		</div>
		end panel
	</div> -->
	<!-- end col-6 -->
</div>