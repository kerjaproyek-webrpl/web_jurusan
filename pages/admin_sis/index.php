<?php 
	session_start();
	include 'ct_admin_sis/ct_admin.php';

	if (!isset($_REQUEST["pilih"])) {
		$oyi = "";
	} else {
		$oyi = $_REQUEST["pilih"];
	}
 ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Dashboard | Siswa</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel="shortcut icon" href="../../images/logo.png">
	<link rel="stylesheet" href="../../assets/adminlte/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
	<link href="../../assets/adminlte/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../assets/adminlte/dist/css/AdminLTE.css">
	<link rel="stylesheet" href="../../assets/adminlte/dist/css/skins/_all-skins.min.css">
</head>
	
<body class="skin-blue sidebar-mini">

<div class="wrapper">
	<header class="main-header">
	<a class="logo">
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
					  <a href="#" class="btn btn-default btn-flat">Profile</a>
					</div>
					<div class="pull-right">
					  <a href="../siswa/ct-login/logout.php" class="btn btn-default btn-flat">Sign out</a>
					</div>
				  </li>
				</ul>
			</li>
		</ul>
	</div>
	</nav>
	</header>

<!-- ===============================================
	User
=============================================== -->

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

<!-- =============================================== -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Dashboard</h1>
			<ol class="breadcrumb">
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Home</a></li>
				<li class="active">Asu</li>
			</ol>
		</section>
		<section class="content">
			<div id="page-wrapper">
				<div class="">
					<?php

						if ($oyi == "dt-diri") {
							require "pages/bio/dt-diri.html";
						} elseif ($oyi == "dt-ayah") {
							require "pages/bio/dt-ayah.html";
						} elseif ($oyi == "dt-ibu") {
							require "pages/bio/dt-ibu.html";
						} elseif ($oyi == "dt-wali") {
							require "pages/bio/dt-wali.html";
						} else {
							require "pages/404.html";
						}
					?>
				</div>
			</div>
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	
	<footer class="main-footer">
		<strong>Copyright All Rights Reserved &copy; 2015 RPL-<a href="">SMKN 5 MALANG</a>.</strong>
		<p>Made with
			<i class="fa fa-headphones"></i>
			and 
			<i class="fa fa-heart"></i>
			By RPL 1
		</p>
	</footer>

</div><!-- ./wrapper -->

	<!-- jQuery 2.1.4 -->
	<script src="../../assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
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
