<html>
<head>
	<meta charset="UTF-8">
	<title>Website Jurusan RPL</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="../../images/logo.png" />

</head>
<body>
	<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="../../">Website RPL</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
										<li><a href="../../">Home</a></li>
											<li><a href="../profil">Profil</a></li>
											<li><a href="../guru">Data Guru</a></li>
											<li><a href="#">Data Siswa</a></li>
											<li><a href="../about">Tentang Kami</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Daftar</h2>
						</header>
						<section class="wrapper style5">
							<div class="inner" style="margin-bottom:470px;">
								<section class="gae-daftar">
									<h4>Daftar</h4>
									<p>Dengan membuat akun baru, Anda akan dapat mendapatkan informasi terbaru dari jurusan, menyimpan banyak data berharga, melihat dan mencari data dalam akun Anda dan banyak lagi.</p>
								</section>
								<div>
									<form action="" method="post">
										<table class="tbl-daftar">
											<tr>
												<td><label for="">NISN*</label></td>
												<td><input type="text" name="nisn" class="form-control" placeholder="7004/754.073" autocomplete="off" require></td>
											</tr>
											<tr>
												<td><label for="">Nama Lengkap</label></td>
												<td><input type="text" name="nm-lkp" class="form-control" placeholder="Muhammad Yuli" autocomplete="off"></td>
											</tr>
											<tr>
												<td><label for="">Email</label></td>
												<td><input type="email" name="email" class="form-control" placeholder="you@example.com" autocomplete="off"></td>
												
											</tr>
											<tr>
												<td><label for="">Password</label></td>
												<td><input type="password" id="pass" name="pass" class="form-control" placeholder=" " autocomplete="off"></td>
											</tr>
											<tr>
												<td><label for="">Konfirmasi Password</label></td>
												<td><input type="password" id="passc" name="konf-pass" class="form-control" placeholder=" " onkeyup="validate()" autocomplete="off"> <span id="konf" style="color:red;"></span></td>
											</tr>
										</table>
										<p>Dengan ini data yang saya isikan adalah benar</p>
										<input type="submit" class="waves-effect waves-light" name="submit">
									</form>
									<script>
										function validate(){
										if(document.getElementById("passc").value!=document.getElementById("pass").value){
										document.getElementById("konf").innerHTML="Tidak Sama <i class='fa fa-hand-o-up'></i>";
										}
										else{
										document.getElementById("konf").innerHTML="";
										}
										}
									</script>
								</div>
							</div>
						</section>
					</article>
			</div>
</body>
</html>