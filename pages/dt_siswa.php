<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="http://my21.io/web_jur/pages/siswa.php">Dashboard</a></li>
			<li class="active">Data Diri</li>
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
				<h4 class="panel-title">Data Diri</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="../controller/ct_siswa.php" method="post" enctype="multipart/form-data" target="">
					<div class="form-group">
						<label class="col-md-2 control-label">NISN</label>
						<div class="col-md-8">
							<input type="text" name="nisn" class="form-control" value="<?php echo $w['nis']; ?>" placeholder="Nomor Induk Siswa" readonly="on" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Nama Lengkap</label>
						<div class="col-md-8">
							<input type="text" name="nama" class="form-control" value="<?php echo $w['nama']; ?>" placeholder="Nama Lengkap" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Alamat</label>
						<div class="col-md-8">
							<input type="text" name="alamat" class="form-control" value="<?php echo $w['alamat']; ?>" placeholder="Alamat" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Agama</label>
						<div class="col-md-8">
							<input type="text" name="agama" class="form-control" value="<?php echo $w['agama']; ?>" placeholder="Agama" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Tempat Lahir</label>
						<div class="col-md-8">
							<input type="text" name="tempat_lhr" class="form-control" value="<?php echo $w['tempat_lhr']; ?>" placeholder="Tempat Lahir" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Tanggal Lahir</label>
						<div class="col-md-8">
							<input type="date" name="tgl_lhr" class="form-control" value="<?php echo $w['tgl_lhr']; ?>" placeholder="Tanggal Lahir" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Unggah Foto</label>
						<div class="col-md-8">
							<input type="file" name="image" class="form-control" id="uplImg"/>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<button type="submit" name="update" class="btn btn-sm btn-success">Simpan <i class="fa fa-save"></i></button>
					</div>
				</form>
				<iframe src="#" id="iframe" name="iframe" frameborder="0" style="display:none;"></iframe>
			</div>
		</div>
		<!-- end panel -->
	</div>
	<!-- end col-6 -->
	<!-- begin col-6 -->
	<div class="col-md-4" id="panel2">
		<!-- begin panel -->
		<div class="panel panel-inverse" data-sortable-id="form-stuff-2">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Foto & QR</h4>
			</div>
			
			<div class="panel-body">
				<div class="form-group">
					<div class="text-center">
						<!-- <form action="../controller/cfg-upload.php" method="post" enctype="multipart/form-data" target="iframe"> -->
						<img src="<?php echo $w['foto']; ?>" height="128" width="128" class="avatar img-circle" alt="Foto Profil">
						<!-- </form> -->
					</div>
				</div>
				<div class="form-group" style="margin-left:5px;">
					<?php echo $w['qr']; ?>
				</div>
			</div>

		</div>
		<!-- end panel -->
	</div>
	<!-- end col-6 -->
</div>
<script src="../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
<script>
	
</script>