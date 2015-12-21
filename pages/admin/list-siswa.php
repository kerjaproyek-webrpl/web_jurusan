<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal-id">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Data Siswa</h4>
			</div>
			<div class="modal-body row">
				<label for="nisModal">NIS</label>
				<input type="text" id="nisModal" class="form-control">
				<label for="namaModal">Nama</label>
				<input type="text" id="namaModal" class="form-control">
				<label for="tlModal">Tempat Lahir</label>
				<input type="text" id="tlModal" class="form-control">
				<label for="tglModal">Tanggal Lahir</label>
				<input type="text" id="tglModal" class="form-control">
				<label for="agamaModal">Agama</label>
				<input type="text" id="agamaModal" class="form-control">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="http://my21.io/web_jur/pages/admin.php">Dashboard</a></li>
			<li class="active">Siswa</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12" id="panel3">
		<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-success" data-click=""><i class="fa fa-plus"></i> Tambah</a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Data Siswa</h4>
			</div>
			<div class="panel-body">
				<div id="example_wrapper" class="dataTables_wrapper">
					<table id="example" class="table table-bordered table-hovered tbl-dt" cellspacing="0" style="text-align:center;" width="100%">
						<thead>
							<tr>
								<th width=3%>No</th>
								<th width=10%>NISN</th>
								<th width=15%>Nama</th>
								<th width=15%>Tempat Lahir</th>
								<th width=15%>Tanggal Lahir</th>
								<th width=7%>Agama</th>
								<th width=15%>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php include '../load/loadDataSiswa.php'; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- end panel -->
	</div>
</div>
<script type="text/javascript">
	function btn_preview(id){
		var nis = $.trim($('#nis'+id).html());
		var nama = $.trim($('#nama'+id).html());;
		var tl = $.trim($('#tl'+id).html());;
		var tgl = $.trim($('#tgl'+id).html());;
		var agama = $.trim($('#agama'+id).html());;

		$('#nisModal').val(nis);
		$('#namaModal').val(nama);
		$('#tlModal').val(tl);
		$('#tglModal').val(tgl);
		$('#agamaModal').val(agama);

		$('#modal-id').modal('show');
	}
</script>