<?php
session_start();

require("functions.php");

if(isset($_COOKIE["user"]))
	render("counselor_page.php");
else
	header("Location: index.php");


?>