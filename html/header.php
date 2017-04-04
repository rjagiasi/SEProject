<!DOCTYPE html>
<html>
<head>
	<title>Career Choices</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/global1.css">

</head>
<body>
	<div class="container-fluid">
		<header class="page-header">
		<img src="../imgs/logo.jpg" class="img-circle" id="im" width="60" height="60">
			<h1 id="headt">Career Choices</h1><br><br><br>
		</header>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					
					<!--Will be removed later-->
					<li><a href="details_page.php">Details</a></li>
					<!--Will be removed later-->
					
					<li><a href="test_page.php">Tests</a></li>
					<li><a href="result_page.php">Results</a></li>
					<li><a href="counselor_page.php">Counsellors</a></li>
					<li><a href="institutes.php">Institutes</a></li>

					<!--Will be removed later-->
					<li><a href="admin_login_page.php">Admin Login</a></li>
					<li><a href="counselor_login_page.php">Counselor Login</a></li>
					<!--Will be removed later-->
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php if (isset($_COOKIE['name'])) { ?>
							<a href="../php/logout.php"><span class="glyphicon glyphicon-log-out"> Logout </a>
						<?php }else{ ?>
							<a href="../php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						<?php }?>
						</li>
				</ul>
			</div>
		</nav>
		
		<div id="content">
