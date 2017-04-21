<?php
	session_start();

	require("functions.php");

	echo isset($_COOKIE["user"]);

	if(isset($_COOKIE["user"]) && isset($_COOKIE["first"]))
		render("details_page.php");
	else
		header("Location: test_page.php");
?>