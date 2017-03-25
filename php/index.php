<?php
	session_start();

	require("functions.php");

	setcookie("userid", 1, time()+(86400*10), "/");

	render("home.php");
?>