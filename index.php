<!DOCTYPE HTML>
<!--

	Website RPL by XII RPL 1
	dari RPL, untuk RPL, oleh RPL

	Halaman Index Website

-->
<html>
	<head>
		<title>Website Jurusan RPL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="images/logo.png" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="#">Website RPL</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="?page=home">Home</a></li>
											<li><a href="?page=profil">Profil</a></li>
											<li><a href="?page=guru">Data Guru</a></li>
											<li><a href="?page=siswa">Data Siswa</a></li>
											<li><a href="?page=about">Tentang Kami</a></li>
											<li><a href="?page=contact">Hubungi Kami</a></li>
											<li><a href="?page=daftar">Daftar</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
				
				<!--................................content......................-->
				<?php 
				extract($_GET);
				if (empty($_GET['page'])) {
					include "home.php";
				}
				elseif ($_GET['page']=='home') {
					include "home.php";
				}
				else if($_GET['page']=='about'){
					include "pages/about/index.php";
				}
				else if($_GET['page']=='siswa'){
					include "pages/siswa/index.php";
				}
				elseif ($_GET['page']=='contact') {
					include "pages/contact/index.php";
				}
				elseif ($_GET['page']=='daftar') {
					include "pages/daftar/index.php";
				}
				?>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/fadil21" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>

						<ul class="copyright">
							<li class="a"><a href="http://www.smkn5malang.sch.id">SMK Negeri 5 Malang</a></li><br>
							<li>Copyright All Reserved &copy; 2015 RPL</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
