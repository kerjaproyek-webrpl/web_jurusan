<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Masuk | Website Jurusan</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="shortcut icon" href="../images/logo128.png">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/style.min.css" rel="stylesheet" />
	<link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image">
					<img src="../images/login/bg-7.jpg" data-id="login-cover-image" alt="" />
				</div>
				<div class="news-caption">
					<h4 class="caption-title">
						<i class="fa fa-headphones text-success"></i> +
						<i class="fa fa-code text-success"></i> + 
						<i class="fa fa-heart text-success"></i> = 
						<i class="fa fa-diamond text-success"></i>
					</h4>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand-align">
						Login
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="" method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" name="nisn" class="form-control input-lg" placeholder="NISN" autocomplete="off" />
						</div>
						<div class="form-group m-b-15">
							<input type="password" name="pass" class="form-control input-lg" placeholder="Password" />
						</div>
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Masuk</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40">
							Belum terdaftar ? Klik <a href="register.php" class="text-success">disini</a> untuk mendaftar.
						</div>
						<hr />
						<p class="text-center text-inverse footer-margin">
							&copy; Copyright by Rekayasa Perangkat Lunak | 2015
						</p>
					</form>
					<?php 
						if (isset($_POST["submit"])) {
							include '../controller/ct-login.php';
						}
					 ?>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
	<script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.3.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');
	</script>
</body>
</html>

