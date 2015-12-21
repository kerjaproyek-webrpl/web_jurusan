<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Daftar | Website Jurusan</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="shortcut icon" href="../images/logo128.png">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/style.min.css" rel="stylesheet" />
	<link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<link rel="stylesheet" href="../assets/css/style.css">
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
		<!-- begin register -->
		<div class="register register-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image">
					<img src="../images/login/bg-8.jpg" alt="" />
				</div>
				<div class="news-caption">
					<h4 class="caption-title">
						<i class="fa fa-headphones text-success"></i> +
						<i class="fa fa-code text-success"></i> + 
						<i class="fa fa-heart text-success"></i> = 
						<i class="fa fa-diamond text-success"></i>
					</h4>
					<p>
						Dengan membuat akun baru, Anda akan dapat mendapatkan informasi terbaru dari jurusan, menyimpan banyak data berharga, melihat dan mencari data dalam akun Anda dan banyak lagi.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin register-header -->
				<div class="register-header">
					<div class="">
						Daftar
					</div>
				</div>
				<!-- end register-header -->
				<!-- begin register-content -->
				<div class="register-content">
					<form action="" method="POST" class="margin-bottom-0">
						<label class="control-label">NISN</label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="text" name="nisn" class="form-control" placeholder="Nomor Induk Siswa Nasional" autocomplete="off" />
							</div>
						</div>
						<label class="control-label">Nama</label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" autocomplete="off" />
							</div>
						</div>
						<label class="control-label">Email</label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off"  />
							</div>
						</div>
						<label class="control-label">Password</label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="password" name="pass" id="pass" class="form-control" placeholder="Password" />
							</div>
						</div>
						<label class="control-label">Konfirmasi Password</label><span id="konf"></span>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="password" id="passc" name="konf_password" class="form-control" onkeyup="validate();" placeholder="Konfirmasi Password" />
							</div>
						</div>
						
						<div class="register-buttons">
							<button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Daftar</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40">
							Sudah terdaftar sebelumnya ? Klik<a href="login.php"> disini</a> untuk masuk.
						</div>
					</form>
					<?php 
						if (isset($_POST["submit"])) {
							// echo "Tombol dipenek";
							include "../controller/ct-register.php";
						}
					 ?>
				</div>
				<!-- end register-content -->
			</div>
			<!-- end right-content -->
		</div>
		<!-- end register -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
	<script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<!-- <script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script> -->
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
		function validate(){
			if(document.getElementById("passc").value!=document.getElementById("pass").value){
				document.getElementById("konf").innerHTML=" <i class='fa fa-close' style='color:red;'></i>";
			} else {
				document.getElementById("konf").innerHTML=" <i class='fa fa-check' style='color:green;'></i>";
			}
		}
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

