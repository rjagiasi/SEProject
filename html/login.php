
<link rel="stylesheet" type="text/css" href="../css/login.css">

<?php if (isset($_COOKIE['name'])) { header('location: ../php/index.php');} ?>

	<div id="cont">

		<ul class="nav nav-tabs">
			<li class="log active"><a data-toggle="tab" href="#login">Login</a></li>
			<li class="log"><a data-toggle="tab" href="#Signup">Signup</a></li>
		</ul>

		<div class="tab-content">
			<div id="login" class="tab-pane fade in active">

				<form action="../php/logincheck.php" method="POST">
					<div class="al">

						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" name="email" required>
						</div>	

						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" name="pwd" required>
						</div>

						<div class="checkbox">
							<label><input type="checkbox" name="rememberme"> Remember me</label>
						</div>

						<div><p style="color: red;">
							<?php 
							if( isset($_SESSION['Error']) )
							{
								echo $_SESSION['Error'];

								unset($_SESSION['Error']);

							}  ?></p></div>

							<button type="submit" class="btn btn-default">Login</button>
							<br>
							<br>
						</div>  

					</form>
					<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>

					<div><p style="color: red;">
						<?php 
						if( isset($_COOKIE['GError']) )
						{
							echo $_COOKIE['GError'];

						}  ?></p></div>  

					</div>

					<div id="Signup" class="tab-pane fade">
						<form action="../php/signup.php" method="POST"> 
							<div class="al">
								<div class="form-group">
									<label for="name">Name:</label>
									<input type="name" class="form-control" name="name" required>
								</div>
								<div class="form-group">
									<label for="email">Email address:</label>
									<input type="email" class="form-control" name="email" required>
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" name="pwd" required>
								</div>
								<br>
								<button type="submit" class="btn btn-default">Signup</button>
							</div>
						</form>

					</div>

				</div>

			</body>
			</html>