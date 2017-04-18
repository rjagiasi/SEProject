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
	<meta name="google-signin-client_id" content="652807989103-m7m0fobg3qba9pd96vbep81t9apdfmj5.apps.googleusercontent.com">

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
						<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
						<script type="text/javascript">

						function signOut() {
							var auth2 = gapi.auth2.getAuthInstance();
							auth2.signOut().then(function () {
								window.location.href = "logout.php";
							});
						}

						function onLoad() {
							gapi.load('auth2', function() {
								gapi.auth2.init();
							});
						}

						
						</script>
						<a id="#" onclick="signOut();"><span class="glyphicon glyphicon-log-out"> Logout </a>

						<?php }else{ ?>
						<script src="https://apis.google.com/js/platform.js" async defer></script>
						<script>
						function onSignIn(googleUser) {
							var id_token = googleUser.getAuthResponse().id_token;
							window.location = "google.php?idtoken="+id_token;

						}

						</script>

						<a href="../php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>

						<?php }?>
					</li>
				</ul>
			</div>
		</nav>

		<div id="content">
