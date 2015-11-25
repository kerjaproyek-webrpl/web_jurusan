<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Dashboard | Admin</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="shortcut icon" href="../../images/logo.png">
		<link rel="stylesheet" href="../../assets/adminlte/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
		<link href="../../assets/adminlte/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../../assets/adminlte/dist/css/AdminLTE.css">
		<link rel="stylesheet" href="../../assets/adminlte/dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="../../assets/adminlte/plugins/datatables/dataTables.bootstrap.css">
		<link rel="stylesheet" href="../../assets/css/style.css">
		<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

		<script src="../../assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	</head>

	<body class="skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<a href="../../index2.html" class="logo">
					<span class="logo-mini"><b>Web Jurusan</b></span>
					<span class="logo-md"><b>Web Jurusan</b></span>
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="../../images/logo.png" class="user-image" alt="User Image"/>
									<span class="hidden-xs"><?php echo $_SESSION['user']; ?></span>
								</a>								
								<ul class="dropdown-menu">
									<li class="user-header">
										<img src="../../images/logo.png" class="img-circle" alt="User Image" />
										<p><?php echo $_SESSION['user']; ?></p>
									</li>									
									<li class="user-footer">
										<div class="pull-left">
											<a href="index.php?page=admin" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="../admin/ct-login/logout.php" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
<!-- =============================================== -->
<!-- gae sidebar -->
<!-- =============================================== -->
			<aside class="main-sidebar">
				<section class="sidebar">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="../../images/logo.png" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p><?php echo $_SESSION['user']; ?></p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<?php require_once "pages/list_item.php"; ?>
				</section>
			</aside>
<!-- =============================================== -->
<!-- gae konten -->
<!-- =============================================== -->

			<div class="content-wrapper">
				<section class="content-header">
					<?php  
						extract($_GET);
						if(empty($_GET["page"])){
							require_once "./pages/awal.php";
						} else {
							require_once "./pages/list_item.php";
						}
					?>
				</section>
				<section class="content">
					<div id="page-wrapper">
						<div class="">
							<?php
							extract($_GET);
								if(empty($_GET["page"])){
									echo "";
								} else if($_GET["page"]=="lups") {
									include "./pages/awal.php";
								} else if($_GET["page"]=="berkas") {
									include "./pages/berkas.php";
								} else if($_GET["page"]=="pendidikan") {
									include "./pages/pendidikan.php";
								} else if($_GET["page"]=="kelas"){
									include "./pages/kelas.php";
								} else if($_GET["page"]=="tahun"){
									include "./pages/tahun.php";
								} else if($_GET["page"]=="semester"){
									include "./pages/semester.php";
								} else if($_GET["page"]=="tingkat"){
									include "./pages/tingkat.php";
								} else if($_GET["page"]=="agama"){
									include "./pages/agama.php";
								} else if($_GET["page"]=="pekerjaan"){
									include "./pages/pekerjaan.php";
								} else if($_GET["page"]=="tempat"){
									include "./pages/tempat_tinggal.php";
								} else if($_GET["page"]=="status"){
									include "./pages/status.php";
								} else if($_GET["page"]=="goldar"){
									include "./pages/goldar.php";
								} else if($_GET["page"]=="kelainan"){
									include "./pages/kelainan.php";
								} else if($_GET["page"]=="penyakit"){
									include "./pages/penyakit.php";
								} else if($_GET["page"]=="guru"){
									include "./pages/guru.php";
								} else if($_GET["page"]=="alumni"){
									include "./pages/alumni.php";
								} else if($_GET["page"]=="kantor"){
									include "./pages/kantor.php";
								} else if($_GET["page"]=="admin"){
									include "./pages/admin.php";
								} else {
									echo "404 Page Not Found";
								}
							?>
						</div><!-- kelas kosongan -->
					</div><!-- page-wrapper -->
				</section><!-- content -->
			</div><!-- Content wrapper -->
			<footer class="main-footer">
				<strong>Copyright All Rights Reserved &copy; 2015 RPL-<a href="">SMKN 5 MALANG</a>.</strong>
				<p>Made with
					<i class="fa fa-headphones"></i>
					and 
					<i class="fa fa-heart"></i>
					By RPL 1
				</p>
			</footer>

<!-- =============================================== -->
<!-- akhir konten -->
<!-- =============================================== -->
		</div><!-- wrapper ndukur -->

		<!-- jQuery 2.1.4 -->
		<script src="../../assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<script src="plugins/datatables/jquery.dataTables.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.js"></script>
		<!-- Bootstrap 3.3.2 JS -->
		<script src="../../assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
		<!-- SlimScroll -->
		<script src="../../assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<!-- FastClick -->
		<script src='../../assets/adminlte/plugins/fastclick/fastclick.min.js'></script>
		<!-- AdminLTE App -->
		<script src="../../assets/adminlte/dist/js/app.min.js" type="text/javascript"></script>
		
		<!-- Demo -->
		<script src="../../assets/adminlte/dist/js/demo.js" type="text/javascript"></script>
	</body>
</html>
