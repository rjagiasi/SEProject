<?php
session_start();

require("functions.php");

if(isset($_COOKIE["user"]))
	render("institutes.php");
else
	header("Location: index.php");
?>