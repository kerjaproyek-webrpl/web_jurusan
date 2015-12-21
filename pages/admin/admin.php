<!DOCTYPE html>
<html>
<head>
	<!-- CSS -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<style type="text/css">
		.gaetabel{
			width: 75%;
			margin-bottom: 12px;
			margin-left: 100px;
			margin-top: 15px;
		}
		td {
			padding: 5px;
		}
	</style>
</head>
<body>
<h3 class="box-title"><span><i class="fa fa-pencil"></i> Konfigurasi Admin</span></h3>
<div class="row">
	<!-- left column -->
	<div class="col-md-10">
		<!-- general form elements -->
		<div class="box box-info">
			<!-- form start -->
			<form role="form" action="" method="POST" name="form1">
				<table class="gaetabel">
					<tr>
						<td><label for="exampleInputEmail1">Nama</label></td>
						<td><input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" value=""></td>
					</tr>
					<tr>
						<td><label for="exampleInputPassword1">Alamat</label></td>
						<td><textarea class="form-control" placeholder="Alamat"></textarea></td>
					</tr>
					<tr>
						<td><label for="exampleInputPassword1">Email</label></td>
						<td><input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail"></td>
					</tr>
					<tr>
						<td><label for="exampleInputTelpon">Telepon</label></td>
						<td><input name="telpon" type="text" class="form-control" id="exampleInputTelepon" placeholder="Telepon" value=""></td>
					</tr>
					<tr>
						<td><label for="exampleInputUsername">Username</label></td>
						<td><input name="user" type="text" class="form-control" id="exampleInputUser" placeholder="Username" value=""></td>
					</tr>
					<tr>
						<td><label for="exampleInputPassword1">Password</label></td>
						<td><input name="pass" type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value=""></td>
					</tr>
					<tr>
						<td><label for="exampleInputFoto">Foto</label></td>
						<td><input name="foto" type="file" class="form-control"></td>
					</tr>
				</table>
			</form>
			<div class="container">
				<div class="form-group">
					<div class="col-sm-3 col-sm-offset-3">
						<input class="btn btn-primary" type="submit" name="submit" value="Save">
						<input class="btn btn-danger" type="submit" name="cancel" value="Cancel">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
