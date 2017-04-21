<?php
session_start();

require("functions.php");

if($_COOKIE["role"] == "Admin")
	render("admin_login_page.php");
else
	header("Location: index.php");


?>