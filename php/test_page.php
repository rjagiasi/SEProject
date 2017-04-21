<?php
	session_start();

	require("functions.php");

	if(isset($_COOKIE["user"]))
		render("test_page.php");
	else
		header("Location: index.php");
?>