<!-- Main -->
					<article id="main">
						<header>
							<h2>Login Sebagai Siswa</h2>
							<!-- <p>Menyajikan data-data dari siswa, guru, dan Industri</p> -->
						</header>
						<section class="wrapper style5">
							<div class="inner" style="margin-bottom:470px;">
								<section class="gae-akun">
									<h4>Daftar</h4>
									<p>Dengan membuat akun baru, Anda akan dapat mendapatkan informasi terbaru dari jurusan, menyimpan banyak data berharga, melihat dan mencari data dalam akun Anda dan banyak lagi.</p>
									<a href="?page=daftar" class="button fit special">Daftar</a>
								</section>
								<section class="gae-login">
									<h4>Login</h4>
									<p>Atau login dahulu untuk masuk</p>
									<form method="post">
										<div>
											<label for="">NISN</label>
											<input type="text" name="nisn" class="form-control" placeholder="Inputkan NISN" autocomplete="off">
										</div>
										<div>
											<label for="">Password</label>
											<input type="password" class="form-control" name="password" placeholder="Password Anda">
										</div>
										<button style="margin-top:50px;" class="button fit special" name="submit" id="submit">Login</button>
									</form>

									<?php 
										if (isset($_POST["submit"])) {
											include "ct-login/login.php";
										}
									 ?>
								</section>
							</div>
						</section>
					</article>