<?php

include ("functions.php");


if(isset($_POST['calendar']))
	setcookie('calendar', $_POST['calendar'], time() + 86400, "/");

$result = query("INSERT INTO user_data VALUES 
('".$_COOKIE["user"]."','".$_COOKIE["name"]."','".$_COOKIE["calendar"]."','".$_COOKIE["percentage"]."','".$_COOKIE["branch"]."') ");
header('Location: interest.php');

setcookie('calendar', $_POST['calendar'], time() -1, "/");
setcookie('name', $_POST['calendar'], time() -1, "/");
setcookie('percentage', $_POST['calendar'], time() -1, "/");
setcookie('branch', $_POST['calendar'], time() -1, "/");
?>