<!-- Main -->
					<article id="main">
						<header>
							<h2>Login Sebagai Admin</h2>
							<!-- <p>Menyajikan data-data dari siswa, guru, dan Industri</p> -->
						</header>
						<section class="wrapper style5">
							<div class="inner" style="margin-bottom:40px;">
								<section class=" login-admin">
									<h4>Login</h4>
									<form method="post">
										<div>
											<label for="username">Username</label>
											<input type="text" name="username" id="username" class="form-control" placeholder="Inputkan Username" autocomplete="off">
										</div>
										<div>
											<label for="password">Password</label>
											<input type="password" id="password" class="form-control" name="password" placeholder="Password Anda">
										</div>
										<button style="margin-top:50px; max-width:435px;" class="button fit special" name="submit" id="submit">Login</button>
									</form>

									<?php 
										if (isset($_POST["submit"])) {
											include "ct-login/ct-login-admin.php";
										}
									 ?>
								</section>
							</div>
						</section>
					</article>